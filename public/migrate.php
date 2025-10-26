<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
$pathsPath = FCPATH . '../app/Config/Paths.php';

// Path to the framework bootstrap file.
require FCPATH . '../app/bootstrap.php';

$migrate = \Config\Services::migrations();

try {
    $migrate->latest();
    echo 'Migrations ran successfully!';
} catch (\Throwable $e) {
    echo $e->getMessage();
}
