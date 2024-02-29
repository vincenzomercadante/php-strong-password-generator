<?php

// import data & functions file
require_once __DIR__ . "./data.php";
require_once __DIR__ . "./functions.php";

// form submitted check
$form_submit = !empty($_GET);


if ($form_submit) {
    // recover password length from
    $password_length = (int) $_GET['psw-length'] ?? 0;

    // generate password only if it's greather than 0
    if ($password_length > 0) {
        // redirect to second page
        header('Location: ./result.php');

        // generate password
        $generated_password = generate_password($password_length, $avaiable_characters);

        // start session
        session_start();

        // session password variable
        $_SESSION['generated_password'] = $generated_password;

    }
}