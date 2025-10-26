<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
$pathsPath = FCPATH . '../app/Config/Paths.php';

// Path to the framework bootstrap file.
require FCPATH . '../app/bootstrap.php';

use Config\Services;

$client = Services::curlrequest();

$response = $client->post('http://localhost/user/login', [
    'form_params' => [
        'deped_id_no' => '1234567',
        'email' => 'test@deped.gov.ph',
        'password' => 'password',
    ],
]);

echo $response->getBody();
