<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session e Cookie</title>
</head>
<body>
    <?php
        session_start();
        setcookie('nome', 'pedro', time() - (60*60*24), '/');

        echo $_COOKIE['nome'];
    ?>
</body>
</html>