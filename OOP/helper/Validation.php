<?php

function ValidationLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("Username Is Null");
    } else if (!isset($loginRequest->password)) {
        throw new ValidationException("Password Is Null");
    } else if (trim($loginRequest->username) == "") {
        throw new Exception("Username Is empty");
    } else if (trim($loginRequest->password) == "") {
        throw new Exception("Password Is empty");
    }
}