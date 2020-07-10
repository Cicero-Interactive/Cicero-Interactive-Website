
module Process_galleries
	def process_galleries(galleries)
		site = Jekyll.sites.first

		for gallery in galleries do
			puts("Processig gallery: " + gallery["dir"])
			# Loop thorough all files in specified gallery dir
			Dir.foreach(gallery["dir"]) do |filename|
				# Skip parent folder entry
				if filename == '.' or filename == '..'
					next
				end
				included = false
				if gallery["images"]
					for image in gallery["images"] do
						included = false
						if image["name"] == filename
							# Image from folder does exist in gallery's images array
							included = true
							if image["path"] == nil
								image["path"] = site.baseurl + "/" + gallery["dir"] + filename
							end
							if image["theme"] == nil
								image["theme"] = "light"
							end
						end
						
					end
				end
				# If image from folder does not exist in array, append it. This check is excluded from the loop above for it not to continue indefinetely
				if included == false && gallery["visible"] == "all"
					gallery["images"].append("path" => site.baseurl + "/" + gallery["dir"] + filename)
				end
			end

			i = 0
			for image in gallery["images"] do
				i += 1
				# Set animation direction, if not specified
				if image["direction"] == nil
					image["direction"] == "rtl"
				end

				if image["product"] == nil
					for product in gallery["products"] do
						if product["images"].include?(i)
							# Set product
							image["product"] = product["short"]
						end
					end
				end
			end
		end
	end
end

Liquid::Template.register_filter(Process_galleries)