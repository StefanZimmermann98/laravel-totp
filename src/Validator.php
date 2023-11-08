<?php

namespace StefanZ\LaravelTOTP;

class Validator
{
    public static function validate(string $key = "", string $token = "")
    {
        if (strlen($key) < 62 || strlen($token) > 6) return false;
        if (strlen($token) < 6) $token = str_pad($token, "0", STR_PAD_LEFT);
        $current = (new TOTP())->GenerateToken($key);
        return ($current === $token);
    }
}
