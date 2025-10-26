<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the only line of code that might need to be changed directory-wise.
$pathsPath = realpath(FCPATH . '/../app/Config/Paths.php');

// Location of the framework bootstrap file.
$app = require_once $pathsPath;

// Run the application.
$app->run();
