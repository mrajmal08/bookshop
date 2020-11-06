<?php
spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    $file = "classes/" . end($parts) . ".php";
    if (file_exists($file)) {
        require $file;
    }
});