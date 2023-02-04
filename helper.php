<?php

if (!function_exists('isAdmin')) {
    function isAdmin($role)
    {
        if($role == config('settings.users.role.admin')) {
            return true;
        }
        return false;
    }
}

if (!function_exists('isManager')) {
    function isManager($role)
    {
        if($role == config('settings.users.role.manager')) {
            return true;
        }
        return false;
    }
}

if (!function_exists('isEmployee')) {
    function isEmployee($role)
    {
        if($role == config('settings.users.role.employee')) {
            return true;
        }
        return false;
    }
}

if (!function_exists('getPrefix')) {
    function getPrefix()
    {
        return request()->get('prefix');
    }
}
