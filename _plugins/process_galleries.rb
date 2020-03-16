
module Process_galleries
	def process_galleries(galleries)
		site = Jekyll.sites.first

		for gallery in galleries do
			puts(gallery["dir"])
			Dir.foreach(gallery["dir"]) do |filename|
				next if filename == '.' or filename == '..'
					included = false
					if gallery["images"]
						for image in gallery["images"] do
							included = false
							if image["name"] == filename
								included = true
								if image["path"] == nil
									image["path"] = site.baseurl + "/" + gallery["dir"] + filename
								end
								break
							end
						end
					end
					if included == false && gallery["visible"] == "all"
						gallery["images"].append("path" => site.baseurl + "/" + gallery["dir"] + filename)
					end
				end
			end

			for image in gallery["images"] do
				if image["direction"] == nil
					image["direction"] == "rtl"
				end
				if image["direction"] == nil
					image["direction"] == "rtl"
				end
				if image["direction"] == nil
					image["direction"] == "rtl"
				end
			end
		end
	end

Liquid::Template.register_filter(Process_galleries)