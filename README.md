Twitter Feed
============

This is a simple web application that let user to search 10 twitter tweets. By default it will search tweets with the word 'engineering'.

Requirements
------------
The minimum requirement by this project is that your Web server supports PHP 5.4.0.

Setup
------
```
git clone this repo
```

CD to project directory and run
```
composer install
```

setup vhost to point to the web root
```
project_folder/web
```

the twitter api wrapper is calling the api via SSL, you may need install the root certificate to your server.  download https://curl.haxx.se/ca/cacert.pem and edit php.ini
```
[curl]
curl.cainfo = "/path/to/cacert.pem"
```

Configuration
-------------
./config/params.php contains my test twitter app's credentials. It's ok to use it for quick testing. For anything else, please use your own.

Technologies used
-----------------
* yii2 framework with the basic template https://github.com/yiisoft/yii2-app-basic
* twitter api wrapper https://packagist.org/packages/j7mbo/twitter-api-php
* twitter search api https://dev.twitter.com/rest/public/search
* gulp, gulp-less for processing less file

Rooms for improvement
---------------------
* the regular expressions used to convert links to be clickable requires proper testing for its robustness 
* allow users to search more than 10 tweets, with UI/UX consideration
* implement summary card https://dev.twitter.com/cards/getting-started
* ajax form submit
* implement tests

