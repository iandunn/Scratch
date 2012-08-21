# Scratch

My personal WordPress starter theme, written from scratch. Most other starter themes are too bloated for my tastes, or just don't do things the way I prefer to. The goal with this is to create a minimal WordPress theme that implements current best practices and does things my way. 

Disclaimer: This isn't anywhere near finished yet.


## Decisions

* The CSS is broken into several files for organization/maintainability. Concatination and minification should be done by a caching plugin or deployment script.
* Image sprites aren't used because I don't think the benefits outweigh the extra time to build and maintain them.
* I'm not using a "mobile first" approach for responsive design because keeping the base styles properly separated from the various layouts isn't worth the time for my typical projects.


## Installation

* cd /var/www/vhosts/example.com/content/themes
* git clone git://github.com/iandunn/Scratch.git theme-slug
* cd theme-slug
* git remote rm origin
* rm README.md
* Find/replace 'Scratch' and 'scratch' to the theme name and slug, respectively.
* Rename classes/scratch.php and js/scratch.js to the theme slug
* Rename files you don't think you'll to to _[original-name]. Delete them before pushing to production if you don't end up using them.


## TODO

* Add Scratch as submodule to your WordPress Skeleton fork
* Convert to HTML5
	* Add shims for HTML5 and media queries
		* Make sure they don't crash IE
	* Do a good round of testing across browsers and devices
* Add in good stuff from HTML5 Boilerplate
* Check Underscores and Bones for ideas
* Check 320 And Up for some responsive ideas
	* Make sure media queries target the current window size, not the potential size. If a desktop browser window is 300px wide, it should get the mobile layout. 
* Run against YSlow
* Do another good round of testing across browsers and devices
* Run against the WP theme checker
* Check with WP theme unit test content
* Implement magic get/set methods in functions.php?
* Make a nice default screenshot
* Move all templates into a /templates/ directory if the appropriate filters are ever added. See [#14310](http://core.trac.wordpress.org/ticket/14310), [#21062](http://core.trac.wordpress.org/ticket/21062) and [#13239](http://core.trac.wordpress.org/ticket/13239).
* Try to use /css/main.css for theme headers so you can delete /style.css
	* If can't, submit a ticket/patch to Trac
* Try to use /images/screenshot.png instead of /screenshot.png
	* If can't, submit a ticket/patch to Trac