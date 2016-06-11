Start talking: [![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/holger1411/auxe?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=body_badge)

## About

I’m a huge fan of Underscores, Bootstrap, and Sass. Why not combine these into a solid WordPress Theme Framework?
That’s what auxe is. 
You can use it as starter theme and build your own theme on top of it. Or you use it as parent theme and create your own child theme for auxe.

At the moment, auxe is in a very early stage. But if you wan’t, feel free to use it for your own WordPress theme!

# auxe WordPress Theme Framework

Website: [http://auxe.com](http://auxe.com)

Child Theme Project: [https://github.com/holger1411/auxe-child](https://github.com/holger1411/auxe-child)

## Changelog

            - **0.4.0 Apr. 29th 2016 **
                   - Switching from Bootstrap 3 to Bootstrap 4
                   - Adding BrowserSync to gulpfile (again thx to @dvlopes)
                   - Preparing the navbar markup so that the current version will work with Bootstrap 3 AND 4
                   - Adding "gulp scripts" command - This uglifies and minifies all JS files (except jQuery...) into one single JS file called theme.min.js
                   - Updating Gulpfile - now "gulp copy-assets" command copies all files from dependency folders into mid-layer folder called "/src"
                   - Load jQuery again as extra script instead of concat it into on single file. After some problems with WooCommerce and other plugins
                   - Checking WordPress 4.5 compatibility
                   - Updating language template
                   - Adding Brazilian Portuguese (pt-BR) translation (thx to @dvlopes).

            - **0.3.8 Mar. 9th 2016 **
                   - Adding footer widget area
                   - Adjust Bootstrap markup for searchform and search widget


            - **0.3.7 Jan. 8th 2016**
                   - Cleanup for submitting to WordPress.org theme repository:
                        - Fixing sticky post problem
                        - Fixing skip-to-content link
                        - re-activating the admin bar
                        - adding readme.txt
                        - Fixing missing translation strings in comments template


            - **0.3.6 Jan. 4th 2016**
                   - Cleanup
                   - Updating dependencies
                   - Upgrade to Bootstrap 3.3.6 and Font Awesome 4.5.0


            - **0.3.4 SEP. 9th 2015**
                   - Adding basic WooCommerce support
                   - Cleanup for submitting to wordpress.org
                   - Removing _s SASS ... no need for basic styling. Thats Bootstrap´s job.


            - **0.3.1 AUG. 12th 2015**
                   - Adding bower dependency manager and replacing GRUNT taskrunner with GULP

            - **0.3.0 Mar. 23th 2015**
                   - Streamlining some code, adding extra "sticky" area (sticky posts above the main content area inside an extra loop). Fixing some child theme issues (now its really child theme ready...really...trust me...)

            - **0.2.9 Mar. 10th 2015**
                   - Adding a new theme customizer option. It lets you add a code snippet right before the closing </body> tag.
                   For example for Google Analytics, Google Tag Mananger, Pingdom etc. Just copy and past your code to the input field and save the setting.
                   So you don´t have to edit the theme source file´s directly and your theme stay´s updateable

            - **0.2.8 Feb. 6th 2015**
                   - Adding Grunt and Grunt SASS task


            - **0.2.7 Jan. 26th 2015**
                   - Adding some basic theme option for the build-in slider script

            - **0.2.6 Dec. 28th 2014**
                    - CLean up


            - **0.2 Dec. 22th 2014**
                    - Adding Jasny Off-Canvas nav and Owl.Carousel Slider script
                    - Enqueue scipts and styled dynamically

            - **0.1 Dec. 10th 2014 - First commit**


## Basic Features

- Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
- Comes with Bootstrap (v3.3.6) Sass source files and additional .scss files. Nicely sorted and ready to add your own variables and customize the Bootstrap variables.
- Uses a single and minified CSS file for all the basic stuff.
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) integration (v4.5.0)
- Comes with extra slider script by [Owl Carousel](http://www.owlcarousel.owlgraphic.com/) (v2.0.0-beta.2.4)
- Simple RTL file.
- Jetpack ready.
- WooCommerce support.
- [Child Theme](https://github.com/holger1411/auxe-child) ready.
- Translation ready.

## Starter Theme + HTML Framework = WordPress Theme Framework

The _s theme is a good starting point to develop a WordPress theme. But it is “just” a raw starter theme. That means it outputs all the WordPress stuff correctly but without any layout or design.
Why not add a well known and supported layout framework to have a solid, clean and responsive foundation? That’s where Bootstrap comes in.

## Confused by All the CSS and Sass Files?

Some basics about the Sass and CSS files that come with auxe:
- The theme itself uses the `/style.css`file just to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/theme.css` file provides all styles. It is composed of five different SCSS sets and one variable file at `/sass/theme.scss`:

                  - 1 "theme/theme_variables";  // <--------- Add your variables into this file. Also add variables to overwrite Bootstrap or auxe variables here
                  - 2 "../src/bootstrap-sass/assets/stylesheets/bootstrap";  // <--------- All the Bootstrap stuff - Don´t edit this!
                  - 3 "auxe/auxe"; // <--------- Some basic WordPress stylings and needed styles to combine Boostrap and Underscores
                  - 4 "../src/fontawesome/scss/font-awesome"; // <--------- Font Awesome Icon styles

                  // Any additional imported files //
                  - 5 "theme/theme";  // <--------- Add your styles into this file

- Don’t edit the files no. 2-4 files/filesets or you won’t be able to update it without overwriting your own work!
- Your design goes into: `/sass/theme`. Add your styles to the `/sass/theme/_theme.scss` file and your variables to the `/sass/theme/_theme_variables.scss`. Or add other .scss files into it and `@import` it into `/sass/theme/_theme.scss`.

## Installation

- Download the auxe folder from GitHub or from auxe.com
- IMPORTANT: If you download it from GitHub make sure you rename the "auxe-master.zip" file just to "auxe.zip" or you might have problems using child themes !!
- Upload it into your WordPress installation subfolder here: `/wp-content/themes/`
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the auxe theme

## Developing With NPM, Bower, Gulp and SASS and [Browser Sync][1]

### Installing Dependencies
- Make sure you have installed Node.js, Bower, and Browser-Sync on your computer globally
- Then open your terminal and browse to the location of your auxe copy
- Run: `$ npm install` then: `$ bower install` and finally: `$ gulp copy-assets`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpfile.js` in the beginning of the file:
```javascript
var browserSyncOptions = {
    proxy: "localhost/theme_test/", // <----- CHANGE HERE
    notify: false
};
```
- then run: `$ gulp watch-bs`

## How to Use the Build-In Widget Slider

The front-page slider is widget driven. Simply add more than one widget to widget position “Hero”.
- Click on Appearance → Widgets.
- Add two, or more, widgets of any kind to widget area “Hero”.
- That’s it.

[1] Visit [http://browsersync.io](http://browsersync.io) for more information on Browser Sync