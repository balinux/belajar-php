<?php

require_once __DIR__ . "/App/Controller/User.php";

use App\Controller\User;

$mahasiswa = new User();

echo $mahasiswa->getName();