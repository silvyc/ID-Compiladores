<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Compiladores PHP</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
</head>

<body>
    <form method="POST">
        <label for="email">Ingresa un email:</label>
        <input type="text" name="email" id="email" placeholder="example@example.com" required>
        <button type="submit">Probar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $valid = validar_email($email);
    }

    /*Validar_email valida un email con el patron especificado
          @param email string
          @return un mensaje de éxito si el correo es válido
          @return un mensaje de invalido si el correo es no es válido
          */
    function validar_email($email)
    {
        $patron = '/^[a-z0-9]+([._-][a-z0-9]+)*@[a-z0-9]+([_-][a-z0-9]+)*(\.[a-z0-9]+([_-][a-z0-9]+)*){1}$/i';
        $valid = preg_match($patron, $email);

        if ($valid) {
            return "La dirección de correo electrónico es válida.";
        } else {
            return "La dirección de correo electrónico no es válida.";
        }
    }
    ?>
    <h1><?php echo isset($valid) ? $valid : ''; ?></h1>
</body>

</html>