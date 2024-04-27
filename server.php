<?php

// Get the current include path
$currentIncludePath = ini_get('include_path');

// Append the additional path '/usr/share/php' to the include path
$newIncludePath = $currentIncludePath . ':/usr/share/php';

// Set the modified include path
ini_set('include_path', $newIncludePath);

// Now you can proceed with the rest of your server.php code

// For example, start the Laravel application
require_once __DIR__.'/public/index.php';