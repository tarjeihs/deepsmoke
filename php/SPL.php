<?php

#
#

spl_autoload_register('autoload');

#   
#

function autoload($className) {

    $directories = array('mysql/', 'php/serialization/', 'php/session/');

    foreach ($directories as $directory) {
        foreach (scandir($directory) as $file) {
            if (is_dir($directory . $file) && substr($file, 0, 1) !== '.')
                autoload($class, $dir . $file . '/');
        
            if (substr($file, 0, 2) !== '._' && preg_match("/.php$/i", $file)) {
                if (str_replace('.php', '', $file) == $className || str_replace('.class.php', '', $file) == $className) {
                    include $directory . $file;
                }
            }
        }
    }
}