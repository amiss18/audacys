Zend Framework 2
=======================

Installation
------------

    git clonehttps://github.com/amiss18/audacys.git
    cd audacys
    composer install
Database
------------

```

DROP TABLE IF EXISTS  `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO `album` (`id`, `artist`, `title`) VALUES
(1, 'Adele', '21'),
(2, 'Bruce Springsteen', 'Wrecking Ball (Deluxe)'),
(3, 'Lana Del Rey', 'Born To Die'),
(4, 'Gotye', 'Making Mirrors'),
(5, 'The Military Wives', 'In My Dreams');
```
Change Database Configuration at 
 config/autoload/global.php:  and 
 config/autoload/local.php:
    
    
