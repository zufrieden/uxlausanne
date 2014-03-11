uxlausanne
==========

This project is developped with Silex microframework

## How to install
Fork this repository and clone it to your machine

### Requirement
````
$ brew install composer
OR
$ curl -s https://getcomposer.org/installer | php
````

### Install dependencies with [Composer](http://getcomposer.org)
````
$ composer install
````

### Configure Webserver (Apache)
````
    <VirtualHost *:80>
        ServerName uxl.dev
        DocumentRoot "/path/to/project/uxlausanne/web"
        DirectoryIndex index.php
        <Directory "/path/to/project/uxlausanne/web">
            AllowOverride All
            Allow from all
        </Directory>
    </VirtualHost>
````
Don't forget to modify your hosts for uxl.dev

### All set
Run : http://uxl.dev/index_dev.php

## Deploy

### Install Capistrano

````
$ gem install capistrano -v 2.15.5
$ gem install railsless-deploy
````

### Deploy to staging dev/production
````
$ git push
$ cap dev deploy
````
````
$ git push
$ cap production deploy
````




