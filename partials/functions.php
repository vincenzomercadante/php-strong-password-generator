<?php

/**
 * Generate password from lenght inserted by the user & the available characters array
 * 
 * @param int $length length of the generated password
 * @param array $characters array of avaiable character
 * 
 * @return string $generated_password string of generated password
 * 
 */
function generate_password($length, $characters)
{
    $generated_password = '';

    for ($i = 0; $i < $length; $i++) {
        // selected a character randomly from the array
        $psw_character = $characters[rand(0, count($characters) - 1)];

        // concat the selected character to the password string
        $generated_password .= $psw_character;
    }

    return $generated_password;
}