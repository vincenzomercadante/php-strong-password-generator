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