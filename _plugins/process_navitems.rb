module Process_navitems
	def process_navitems(navitems)
	site = Jekyll.sites.first

		if navitems
			for navitem in navitems do
				# Assign missing names
				for lang in site.config["languages"]
					if navitem["en"] == nil
						navitem["en"] = "undefined"
					end
					if navitem[lang] == nil
						navitem[lang] = navitem["en"]
					end
				end

				# Assign text matching current language
				navitem["text"] = navitem[site.config["lang"]]

				# Assign missing link
				if navitem["dest"] == nil && navitem["dropdown"] == nil
					navitem["dest"] = site.config["baseurl"] + "/" + navitem["en"].downcase + ".php"
				end

				# Process dropdown items
				if navitem["dropdown"]
					for dropdownitem in navitem["dropdown"]
						# Assign missing names
						for lang in site.config["languages"]
							if dropdownitem["en"] == nil
								dropdownitem["en"] = "undefined"
							end
							if dropdownitem[lang] == nil
								dropdownitem[lang] = dropdownitem["en"]
							end
						end

						# Assign missing link
						if dropdownitem["dest"] == nil
							dropdownitem["dest"] = site.config["baseurl"] + "/" + dropdownitem["en" + ".php"]
						end
					end
				end
			end
		end
	end
end

Liquid::Template.register_filter(Process_navitems)