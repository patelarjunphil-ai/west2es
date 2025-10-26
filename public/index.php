<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
$pathsPath = FCPATH . '../app/Config/Paths.php';
// ^^^ Change this if you move your application folder

// Path to the writable directory.
$writablePath = FCPATH . '../writable';

// Path to the tests directory
$testsPath = FCPATH . '../tests';

//---------------------------------------------------------------
// BOOTSTRAP THE APPLICATION
//---------------------------------------------------------------
require FCPATH . '../app/bootstrap.php';
