[![Stories in Ready](https://badge.waffle.io/sdco-partners/north-corner-haven.png?label=ready&title=Ready)](https://waffle.io/sdco-partners/north-corner-haven)
# North Corner Haven
Copyright 2017 SDCO Partners
###### Developed by Asif

1. Getting Started 
  * Initializing New Project
  * Starting/Editing Current Project
  * Folder Structure
3. Dev Environment
  * Gulp config
  * SASS
  * Javascript 
  * Components & Subcomponents
  * Functions.PHP
4. Deployment & Updates
5. Bugs 


### Getting Started - DEV

#### Initializing New Project
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


#### Starting/Editing Current Project
Follow these steps to start or edit a current project. See notes under DEV ENVIRONMENT for more info

In Terminal ...

1. Run `npm install` 
2. Run `gulp`


#### Folder Structer


```
|--/nch/
|  |
|  |--/assets/
|  | 
|  |--/components/
|  |
|  |--/prod/
|  |
|  |--/src/
|    | 
|    |--/js/
|    | 
|    |--/sass/
|       └-- _mixins.sass
|       └-- _rest.sass
|       └-- _variables.sass
|       └-- styles.sass
└-- 404.php
└-- footer.php
└-- function.php
└-- header.php
└-- index.php
└-- sidebar.php
└-- README.txt
└-- style.css 
```

### Dev Environment


### Deployment & Updates

#### First Deployment

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
4. Update "local-config.php"
  * [x]  Set lines 4, 7, and 10 with your database info
5. Update "wp-config.php"
  * [x]  Set var $local_path on line 91 with your server url
6. Update "style.css" if necessary
  * [x]  Find all instances of previous url and replace
7. Update "functions.php"
  * [x]  Set var $GLOBALS['root']


### Feature Documentation

#### Instagram API

#### Known Bugs

### Team 
  
  * PROJECT MANAGER   :   Paige Feighley
  * UX/UI DESIGNER    :   Kristmar Muldrow
  * DEVELOPER         :   Asifuzzaman Ahmed
