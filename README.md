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
    https://github.com/amiss18/audacys.git
    cd zend-framework2
Database
------------

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `artist`, `title`) VALUES
(1, 'Adele', '21'),
(2, 'Bruce Springsteen', 'Wrecking Ball (Deluxe)'),
(3, 'Lana Del Rey', 'Born To Die'),
(4, 'Gotye', 'Making Mirrors'),
(5, 'The Military Wives', 'In My Dreams');
    
 Change Database Configuration at 
 config/autoload/global.php:  and 
 config/autoload/local.php:
    
    
