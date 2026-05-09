<?php

require_once __DIR__ ."/App/Controller/User.php";

use App\Controller\User;

$user = new User();
$tempatMakanMukhlis = $user->getName();

echo $tempatMakanMukhlis;

