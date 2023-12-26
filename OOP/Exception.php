<?php
require_once 'exception/ValidationException.php';
require_once 'helper/Validation.php';
require_once 'data/LoginRequest.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "EKO";
$loginRequest->password = "   ";

try {
    ValidationLoginRequest($loginRequest);
    echo "VALID " . PHP_EOL;
} catch (ValidationException|Exception $exception) {
    echo "ERROR: {$exception->getMessage()}" . PHP_EOL;
//    var_dump($exception->getTrace());
    echo "ERROR: {$exception->getTraceAsString()}" . PHP_EOL;
} finally {
    echo "ERROR GAK ERROR DIPANGGIL" . PHP_EOL;
}
//catch (Exception $exception) {
//    echo "ERROR: {$exception->getMessage()}" . PHP_EOL;
//}