<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Nombre" name="name" required >
        <input type="email" placeholder="email" name="email" id="" required>
        <input type="text" placeholder="asunto" name="asunto" id="" required>
        <textarea name="msg" placeholder="mensaje" id="" cols="30" rows="10" required ></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
        include("correo.php");
    ?>
</body>
</html>