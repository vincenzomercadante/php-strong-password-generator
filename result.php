<?php

// starting session
session_start();

// recover password from session array
$password = $_SESSION["generated_password"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password result</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="py-5">
    <div class="container text-center">
        <!-- page title -->
        <h1 class="my-3 text-uppercase">Your password is:</h1>

        <!-- generated password -->
        <h2 class="mt-3 text-uppercase">
            <?= $password ?>
        </h2>
    </div>
</body>

</html>