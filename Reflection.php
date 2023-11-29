<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "bram";
$request->password = "adadeh";
// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest 
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Bram";
$register->address = "Trenggalek";
$register->email = "bramasta026x@gmail.com";

ValidationUtil::validateReflection($register);