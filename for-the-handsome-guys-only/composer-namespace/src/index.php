<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Services\UserService;

$userService = new UserService();

echo $userService->showUser();