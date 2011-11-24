# Creates a zip file of the Foundation template and the compessed assets
`rm -rf public marketing/files/foundation-download.zip`
`jammit`
`mkdir public/src public/src/javascripts public/src/stylesheets`
`cp -R humans.txt images index.html robots.txt public/src`
`cp public/assets/foundation.js public/src/javascripts`
`cp stylesheets/ie.css public/src/stylesheets/ie.css`
`cp javascripts/app.js public/src/javascripts/app.js`

File.open('public/src/stylesheets/foundation.css', "w") do |file|  
  %w{stylesheets/globals.css stylesheets/typography.css stylesheets/grid.css stylesheets/ui.css stylesheets/forms.css stylesheets/orbit.css stylesheets/reveal.css stylesheets/mobile.css}.each do |stylesheet|
    file.puts File.read(stylesheet)
  end
end

file_name = 'public/src/index.html'

text = File.read(file_name)
text.gsub!(/<!-- Combine and Compress These CSS Files -->.+<!-- End Combine and Compress These CSS Files -->/m, "<link rel=\"stylesheet\" href=\"stylesheets/foundation.css\">")
text.gsub!(/<!-- Combine and Compress These JS Files -->.+<!-- End Combine and Compress These JS Files -->/m, "<script src=\"javascripts/foundation.js\"></script>")

File.open(file_name, "w") do |file|  
  file.puts text
end

`cd public/src && zip -r ../../marketing/files/foundation-download.zip *`
`rm -rf public`