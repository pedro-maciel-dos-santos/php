<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET e POST</title>
</head>
<body>
    <?php
    /*
        if(isset($_GET['acao'])){
        $nome = @$_GET['nome'];
        $email = @$_GET['email'];

        echo $nome;
        echo "<br>";
        echo $email;
        }
    */
    /*
        if(isset($_POST['acao'])){
            echo $_POST['nome'];
            }
    */
    if(isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $value) {
                echo $key;
                echo "=>";
                echo $value;
                echo "<hr>";
            }
        }
    ?>
    <!--
    <form action="" method="post">
        <input type="text" name="nome" id="txt">
        <input type="text" name="email" id="txt">
        <input type="submit" name="acao" value="Enviar">
    </form>
    -->
    <form action="" method="post">
        <select name="nome" id="snome">
            <option value="pedro">pedro</option>
            <option value="joao">joao</option>
        </select>
        <input type="checkbox" name="valor[]" id="box" value="10">10
        <input type="checkbox" name="valor[]" id="box" value="20">20
        <input type="checkbox" name="valor[]" id="box" value="30">30
        <input type="checkbox" name="valor[]" id="box" value="40">40
    <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>