module Process_navitems
	def process_navitems(navitems)
	site = Jekyll.sites.first

		if navitems
			for navitem in navitems do
				if navitem["processed"] == true
					next
				end

				# Assign missing names
				if navitem["en"] == nil
					navitem["en"] = "undefined"
				end
				for lang in site.config["languages"]
					if navitem[lang] == nil
						navitem[lang] = navitem["en"]
					end
				end

				# Assign text matching current language
				navitem["text"] = navitem[site.config["lang"]]

				# Assign missing link
				if navitem["dropdown"] == nil
					if navitem["dest"] == nil
						navitem["dest"] = site.config["baseurl"] + "/" + navitem["en"].downcase + ".php"
					elsif !navitem["dest"].include?("http")
						navitem["dest"].prepend(site.config["baseurl"] + "/")
					end
				end

				# Process dropdown items
				if navitem["dropdown"]
					for dropdownitem in navitem["dropdown"]
						# Assign missing names
						if dropdownitem["en"] == nil
							dropdownitem["en"] = "undefined"
						end
						for lang in site.config["languages"]
							if dropdownitem[lang] == nil
								dropdownitem[lang] = dropdownitem["en"]
							end
						end

						# Assign text matching current language
						dropdownitem["text"] = dropdownitem[site.config["lang"]]

						# Assign missing link
						if dropdownitem["dest"] == nil
							dropdownitem["dest"] = site.config["baseurl"] + "/" + dropdownitem["en"].downcase + ".php"
						elsif !dropdownitem["dest"].include?("http")
							dropdownitem["dest"].prepend(site.config["baseurl"] + "/")
						end
					end
				end
				navitem["processed"] = true
			end
		end
	end
end

Liquid::Template.register_filter(Process_navitems)