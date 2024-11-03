<?php

namespace App\Helpers;

class Helper
{
    public static function get_user_roles()
    {
        $roles = ['user', 'admin'];
        return $roles;
    }
}
