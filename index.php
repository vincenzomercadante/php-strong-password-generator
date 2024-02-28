<?php
// avaiable characters
$uppercase_letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$lowercase_letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$special_characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', '\'', '<', '>', ',', '.', '?', '/'];

$avaiable_characters = array_merge($numbers, $special_characters, $lowercase_letters, $uppercase_letters);

// form submitted check
$form_submit = !empty($_GET);

/**
 * Generate password from lenght inserted by the user & the avaiable characters array
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


if ($form_submit) {
    // recover password length from
    $password_length = (int) $_GET['psw-length'] ?? 0;

    // generate password only if it's greather than 0
    if ($password_length > 0)
        $generated_password = generate_password($password_length, $avaiable_characters);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container py-4">
        <!-- page title -->
        <h1 class="text-center text-uppercase mb-5">password Generator</h1>

        <!-- form -->
        <form method="GET" class="row mb-5">
            <div class="col-10 ">
                <input type="number" class="form-control" name="psw-length" id="psw" min="6" max="12"
                    value="<?= $password_length ?? '' ?>">
            </div>
            <div class="col-2">
                <input type="submit" value="SEND" class="btn btn-primary">
            </div>
        </form>

        <hr />

        <!-- result title -->
        <h2 class="text-center text-uppercase mb-5">Password result:</h2>

        <!-- generated password -->
        <h3>
            Your password is:
            <?= $generated_password ?? '' ?>
        </h3>
    </div>
</body>

</html>