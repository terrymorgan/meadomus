###*Me A Domus* Responsive Redesign

>######This is my first web site. I wanted a thorough education so its coded mostly from scratch in Notepad++ using just HTML, CSS, and a little jQuery, without a CMS or frameworks. My studies covered additional topics required for a quality site, such as usability, accessibility, security, and SEO.
>######See it at http://meadomus.net <hr>

#####Content and Usability First
The original two-page fixed-width site was redesigned to incorporate an outside designer's recent brand updates. Layout and breakpoints were designed around content, and the new design emphasizes usability and clarity.

#####Mobile First and Fully Responsive
- Uses fluid grids and images.
- CSS for narrow screens comes first with `min-width` media queries further down the file.

Picturefill v2 doesn't allow a fallback image via `src`, and `<noscript>` resulted in twin displayed images. I chose to use `src` to provide a no-JS fallback image and skip Picturefill.

Higher resolution images were unavailable for delivery to high density displays. Used `srcset` with the `w` property to deliver scaled images, allowing the browser to select the most appropriate one.

#####Progressive Enhancement
Content, presentation, and behavior are segregated into HTML, CSS and JS respectively. Users without JS get a static hero image on the home page with a message and link to visit the photo gallery, while users with JS get DOM additions, converting the hero image into a slide show.
  
#####Accessible and SEO Friendly
Skip-to links, `img alt` text, and form labels are provided for screen readers.
Titles and meta descriptions were guided by keyword research.
An expansion of content planned for the future will allow topical pages and improved SEO.
  
#####Optimized and Fast
- Common resources are taken from CDNs.
- Images are compressed.
- CSS and JS are minified, and CSS is inlined via php `require` statements to reduce network requests.
- Gzip and caching are enabled via .htaccess.
- Included custom 404, Google Analytics, and sitemap.xml

The site was tested using PageSpeedInsights and WebPageTest.org. The site's largest pages, home and projects, have First View Speed Indexes of 946 and 804 respectively.  With 3G throttling, home page DomContentLoad occurs in less than 2 seconds.

#####DRY
PHP `require` statements incorporate code modules, such as a header and footer, and code snippets, such as a `sizes` attribute on the projects page.

#####Security and Forms
A php.ini file eliminates security vulnerabilities.

The contact form has a blank honeypot field to trap bots. The php mail script terminates if the honeypot field is not empty. Other form fields use HTML5 field types, allowing for client-side validation.
All user input is sanitized via `htmlentities()` with newlines converted to `<br>` to prevent header injection. The required `phone` field is validated via regular expression matching.
This mail script has room for improvement and I will be upgrading it as I learn more about PHP.