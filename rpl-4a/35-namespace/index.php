<?php

require_once __DIR__ . "/App/Controller/UserController.php";

use App\Controller\UserController;

$user = new UserController();

echo "nama kamu adalah: ". $user->getName();
