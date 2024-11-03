<?php

namespace App\Helpers;

class Helper
{
    public static function get_user_roles()
    {
        $roles = ['user', 'admin'];
        return $roles;
    }

    public static function get_restaurants_types()
    {
        $types = ['user', 'admin'];
        return $types;
    }

    public static function get_restaurants_certification_statuses()
    {
        $certification_statuses = ['user', 'admin'];
        return $certification_statuses;
    }
}
