<?php
// An autoload function used from unit tests
function googleMapsToolsAutoload($class) {
    $data = explode('\\', $class);
    if ($data[0] == 'GoogleMapsTools') {
        $file = implode('/', $data) . '.php';
        if (file_exists($file)) {
            require_once($file);
        }
    }
}

spl_autoload_register('googleMapsToolsAutoload');
