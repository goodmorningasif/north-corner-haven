[![Stories in Ready](https://badge.waffle.io/sdco-partners/north-corner-haven.png?label=ready&title=Ready)](https://waffle.io/sdco-partners/north-corner-haven)
# North Corner Haven
[http://northcorner-haven.com](http://northcorner-haven.com)

Last Update: April 12/2017
Copyright 2017 SDCO Partners

1. Getting Started 
  * Folder Structure
  * Initializing New Project
  * Starting/Editing Current Project
  * Deployment
  * Updates
  * Feature Documents
2. Dev Environment
  * Gulp config
  * SASS
  * Javascript 
  * Components & Subcomponents
  * Functions.PHP
3. Known Bugs 
4. Team

## Getting Started

### Folder Structer

```
|--/nch/
|  |
|  |--/assets/
|  |  |
|  |  └-- /fonts/
|  |
|  |--/components/
|  |  └-- insta-feed.php
|  |  └-- invited.php
|  |  └-- land.php
|  |  └-- lines.php
|  |  └-- main.php
|  |  └-- newsletter.php
|  |
|  |--/prod/
|  |  └-- script.js
|  |  └-- styles.css
|  |  └-- underscore.js
|  |
|  |--/src/
|  |  | 
|  |  |--/js/
|  |  |  └-- a.js
|  |  |  └-- copy.js
|  |  |  └-- element.js
|  |  |  └-- track.js
|  |  |
|  |  |--/sass/
|  |  |  └-- _foot.sass
|  |  |  └-- _head.sass
|  |  |  └-- _insta-feed.sass
|  |  |  └-- _invited.sass
|  |  |  └-- _land.sass
|  |  |  └-- _main.sass
|  |  |  └-- _mixins.sass
|  |  |  └-- _newsletter.sass
|  |  |  └-- _rest.sass
|  |  |  └-- _variables.sass
|  |  |  └-- styles.sass
|  |  | 
└-- 404.php
└-- config.php
└-- footer.php
└-- function.php
└-- header.php
└-- index.php
└-- sidebar.php
└-- README.txt
└-- style.css 
```

### Initializing New Project
Follow these steps to configure your install to your specific project.

1. WP-CONFIG.PHP
  * [x]  set var $local_path 
2. LOCAL-CONFIG-EXAMPLE.PHP
  * [x]  remove '-example' from end of filepath
  * [x]  set DB_NAME 
  * [x]  set DB_USER 
  * [x]  set DB_PASSWORD
3. PACKAGE.JSON
  * [x]  set 'name' 
  * [x]  set 'description' 
  * [x]  set 'url' for both 'repository' and 'bugs'
  * [x]  set 'homepage' 
4. GULPFILE.JS
  * [x]  set var uri in line 75
5. .GITIGNORE
  * [x]  set filepath to inner CONFIG.PHP on line 75
6. THEME FILES & FOLDERS
  * [x]  rename folder 'INIT' 
  * [x]  set 'Theme Name' and 'Theme URI' in STYLE.CSS
  * [x]  set var $GLOBALS['root'] and $GLOBALS['docpath'] in FUNCTIONS.PHP
  * [x]  set var $uri in _VARIABLES.SASS, 2 points
  * [x]  set @link and @package notes on all template files.
7. WORDPRESS SUBMODULE
  * [x]  run command `git submodule update --init`


### Starting/Editing Current Project
Follow these steps to start or edit a current project. See notes under DEV ENVIRONMENT for more info

In Terminal ...

1. Run `npm install` 
2. Run `gulp`


### Deployment

1. Create new WHM Account
  * [x]  Click "Create A New Account" and follow prompts
  * [x]  Click "List Accounts" and locate the account you just created
2. Create new database and user on the server
  * [x]  Navigate to the account's CPanel
  * [x]  Click "MySQL Databases" and follow prompts to:
    * [x]  Create a new database  
    * [x]  Create a new user
    * [x]  Connect the new user to the new database 
3. Import local database to newly created server database 
  * [x]  Navigate to the account's CPanel
  * [x]  Click "phpMyAdmin"
  * [x]  Select the database you created
  * [x]  Click "Import" and follow prompts
4. Upload folders to server
  * Include Folders
  * Exclude Folders
4. Update "local-config.php"
  * [x]  Set lines 4, 7, and 10 with your database info
5. Update "wp-config.php"
  * [x]  Set var $local_path on line 91 with your server url
6. Update "style.css" if necessary
  * [x]  Find all instances of previous url and replace
7. Update "functions.php"
  * [x]  Set var $GLOBALS['root']

### Updates


### Feature Documentation

#### Animated Track & Content Fade-Ins

  The line animation that runs vertically down the site uses primarily JavaScript and CSS. 

  Most of the timing and fading features utilize simple CSS trasnitions (read on for the one exception). To make adjustments to the track tranitions, use `lines.sass`. To make adjustments to the copy fade-in/fade-out transitions, use "styles.sass".

  `element.js` is a superclass object that takes in an element and calculates the top and bottom positions of that element based on it's current postion. It contains a 'visited' toggle to be used when a visitor has passed that particular element. Finally, the only timing control within JS files is the timeout method, which is used to delay that visited toggle. This is currently being used to give visitors just 2 extra seconds of time before fading in the following section.

  `track.js` handles calculating the space between the sections and injecting that into the track element as its height. 

  `copy.js` toggles the opacity of an element's children. It also has a function to handle multiple elements. The fade-in/fade-out animation is handled by css in `styles.sass`. 
  
  Under `a.js`, the Element superclass is extended into in subclasses that calculate the top/bottom positions for the elements used for our track animations. On document.ready we monitor the current scroll position and use the triggerActions function to run both copy.js and track.js functions. Finally, we reset top/bottom position calculations upon browser width change to account for responsive design.
 

#### Instagram API

  The Instragram feed is generated by the Instragram Feed plugin. The plugin generates a shorcode which has been inserted into `insta-feed.php`. Thought the plugin has it's own customization options, these have been stripped to the basics and overriden using `insta-feed.sass`.
 

#### Newsletter Signup

  The newsletter signup uses Contact Form 7 to handle the form submission and initial email notification as well as the MailChimp add-on to log signup into the client's Mailchimp list. As a good habit, we're also saving a back-up of all entries using Flamingo, but this is not necessary for the site's functionality nor is it a functionality promised to the client. 

  If the database is taking up too much space on our server, purge the entries under the Flamingo tab, then disable the plugin. If the Flamingo connection breaks, make sure the flamingo integration code is utilized under `Newsletter Signup > Additional Settings`.


#### Known Bugs

  * Track Slider does not auto-update length and position on browser width resize. The auto updater function still requires you to scroll first.

### Team 
  
  * PROJECT MANAGER   :   Paige Feighley
  * UX/UI DESIGNER    :   Kristmar Muldrow
  * DEVELOPER         :   Asifuzzaman Ahmed
