<?php

require_once __DIR__ . "/App/Models/User.php";

use App\Models\User;

$user = new User();

echo $user->getName();