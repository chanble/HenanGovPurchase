<?php
    public static function md5Hash($password, $salt, $iterations)
    {
        $hash = hash('md5', $salt.$password, TRUE);
        for ($i = 0; $i < $iterations - 1; $i++) {
            $hash = hash('md5', $hash, TRUE);
        }
        return bin2hex($hash);
    }
