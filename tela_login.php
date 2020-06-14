<?php
    // INICIANDO SESSION
    session_start();

    // RESGATANDO SESSION
    $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : null;
    unset($_SESSION["msg"]);
    unset($_SESSION["info"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área de Login</title>

    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Área de Login">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/tela_login.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- LOGO -->
    <link rel="icon" href="img/logo.jpg">
</head>
<body>
    <!-- AVISO -->
    <section class="aviso">
        <p><?php echo $msg ?></p>
    </section>

    <!-- LOGIN -->
    <form action="php/login_admin.php" method="post" class="login">
        <h1><i class="material-icons">settings</i>Administrador</h1>
        <!-- campo -->
        <p class="campo">
            <input type="text" name="usuario" placeholder="Usuário" pattern="[A-Za-zÀ-ú]+" title="Apenas letras" maxlength="25" required>
        </p>
        <p class="campo">
            <input type="password" name="senha" placeholder="Senha" pattern="[A-Za-z0-9]+" maxlength="25" required>
        </p>
        <p class="campo">
            <input type="submit" value="Entrar">
        </p>
    </form>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="js/pred.js"></script>
</body>
</html>