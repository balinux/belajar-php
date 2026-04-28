<?php

namespace Src\Services;

use Src\Models\User;

class UserService{

    public function showUser(){
        $user = new User();
        return $user->getName();
    }

}