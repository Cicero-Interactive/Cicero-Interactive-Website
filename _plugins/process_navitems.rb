module Process_navitems
	def process_navitems(navitems)
	site = Jekyll.sites.first

		if navitems
			for navitem in navitems do
				# Assign missing names
				for lang in site.data["languages"]
					if navitem["en"] == nil
						navitem["en"] = "undefined"
					end
					if navitem[lang["short"]] == nil
						navitem[lang["short"]] = navitem["en"]
					end
				end

				# Assign missing link
				if navitem["dest"] == nil && navitem["dropdown"] == nil
					navitem["dest"] = navitem["en"] + ".php"
				end

				# Assign missing footnote numbers
				if navitem["dropdown"]
					for dropdownitem in navitem["dropdown"]
						# Assign missing names
						for lang in site.data["languages"]
							if dropdownitem["en"] == nil
								dropdownitem["en"] = "undefined"
							end
							if dropdownitem[lang["short"]] == nil
								dropdownitem[lang["short"]] = dropdownitem["en"]
							end
						end

						# Assign missing link
						if dropdownitem["dest"] == nil
							dropdownitem["dest"] = dropdownitem["en" + ".php"]
						end
					end
				end
			end
		end
	end
end

Liquid::Template.register_filter(Process_navitems)