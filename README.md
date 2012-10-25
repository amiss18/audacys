Zend Framework 2
=======================

Installation
------------

Using Composer (recommended)
----------------------------
    cd my/project/dir
	git clone git://github.com/zendframework/ZendSkeletonApplication.git
	cd ZendSkeletonApplication
	php composer.phar install
	
If composer.phar is not already installed
    open php.ini file located at /etc/php5/cli/php.ini in ubuntu
	Add suhosin.executor.include.whitelist = phar at the end of php.ini file
	then execute following commands at terminal
	curl -s https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer
	composer install
Using Git submodules
----------------------------
    cd my/project/dir
    https://github.com/bashantad/zend-framework2.git
    cd zend-framework2
Database
------------
create database and run the following sql
CREATE TABLE album (
  id int(11) NOT NULL auto_increment,
  artist varchar(100) NOT NULL,
  title varchar(100) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO album (artist, title)
    VALUES  ('The  Military  Wives',  'In  My  Dreams');
INSERT INTO album (artist, title)
    VALUES  ('Adele',  '21');
INSERT INTO album (artist, title)
    VALUES  ('Bruce  Springsteen',  'Wrecking Ball (Deluxe)');
INSERT INTO album (artist, title)
    VALUES  ('Lana  Del  Rey',  'Born  To  Die');
INSERT INTO album (artist, title)
    VALUES  ('Gotye',  'Making  Mirrors');
    
 Change Database Configuration at 
 config/autoload/global.php:  and 
 config/autoload/local.php:
    
    
