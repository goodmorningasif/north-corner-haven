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

### Feature Documentaion

### Bugs