<?php
require_once 'exception/ValidationException.php';
require_once 'data/LoginRequest.php';
require_once 'helper/ValidationUtil.php';

$request = new LoginRequest();
$request->username = null;
$request->password = null;
ValidationUtil::validateReflection($request);