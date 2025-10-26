<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
$pathsPath = FCPATH . '../app/Config/Paths.php';

// Path to the framework bootstrap file.
require FCPATH . '../app/bootstrap.php';

require_once APPPATH . '../tests/UserTest.php';

$test = new UserTest();
$test->testLogin();
