# Scratch

My personal WordPress starter theme, written from scratch. Most other starter themes are too bloated for my tastes, or just don't do things the way I prefer to. The goal with this is to create a minimal WordPress theme that implements current best practices and does things my way. 

Disclaimer: This isn't anywhere near finished yet.


## Decisions

* The CSS is broken into several files for organization/maintainability. Concatination and minification should be done by a caching plugin or deployment script.
* Image sprites aren't used I don't think the benefits outweigh the extra time to build and maintain them.
* Not using a "mobile first" approach for responsive design because keeping the base styles properly separated from the various layouts isn't worth it.


## Installation

* cd /var/www/vhosts/example.com/content/themes
* git clone git://github.com/iandunn/Scratch.git [current-year]-[client-name]
* git remote rm origin
* rm README.md
* Find/replace 'Scratch' and 'scratch' to the theme name and slug, respectively.
* Rename files you don't think you'll to to _[original-name]. Delete them before pushing to production if you don't end up using them.


## TODO

* Convert to HTML5
* Add shims for HTML5 and media queries
	* Make sure they don't crash IE
* Add in good stuff from HTML5 Boilerplate
* Check Underscores and Bones for ideas
* Check 320 And Up for some responsive ideas
* Run against YSlow
* Try to move all templates into a separate directory, but only if you can figure out a way to move index.php, single.php, etc
* Run against the WP theme checker
* Check with WP theme unit test content
* Implement magic get/set methods in functions.php?
* Make a screenshot