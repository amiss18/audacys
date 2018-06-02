<?php
// config/application.config.php:
return array(
    /*
    'modules' => array(
      //  'Application',
      //  'Album',
      //  'ZendDeveloperTools',

    ),*/
    'modules' => $modules,
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        // Use the $env value to determine the state of the flag
        'config_cache_enabled' => ($env == 'production'),
        'config_cache_key' => 'app_config',
        // Use the $env value to determine the state of the flag
        'module_map_cache_enabled' => ($env == 'production'),
        'module_map_cache_key' => 'module_map',
        'cache_dir' => 'data/cache/',

        // Use the $env value to determine the state of the flag
        'check_dependencies' => ($env != 'production'),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
