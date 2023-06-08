<?php

$length = isset($_GET['length']) ? $_GET['length'] : '';

function create_pw($length)
{
    $arr_alph_num = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?$?%^&*()_-+={[}]:;@#|\<,>.?/';
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $arr_alph_num[rand(0, strlen($arr_alph_num) - 1)];
    }

    return $password;
}

$password = "";

$password = create_pw($length);
