<?php

// import data & functions file
require_once __DIR__ . "./partials/data.php";
require_once __DIR__ . "./partials/functions.php";

// form submitted check
$form_submit = !empty($_GET);


if ($form_submit) {
    // recover password length from
    $password_length = (int) $_GET['psw-length'] ?? 0;

    // generate password only if it's greather than 0
    if ($password_length > 0)
        $generated_password = generate_password($password_length, $avaiable_characters);
}
