<?php
    // INICIANDO SESSION
    session_start();

    // RESGATANDO SESSIONS
    if(isset($_SESSION["info"])){
        $info = $_SESSION["info"];
    }
    else{
        $_SESSION["msg"] = "Necessário realizar o login";
        header("location: tela_login.php");
    }

    // EXPIRANDO SESSION
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área do Administrador</title>

    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Área do Administrador">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/tela_admin.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- LOGO -->
    <link rel="icon" href="img/logo.jpg">
</head>
<body>

    <!-- MENU - MOBILE -->
    <section class="menu-mobile">
        <!-- info -->
        <article class="guia">
            <h3>Menu</h3>
            <!-- aba -->
            <a href="#" class="aba">Inicial</a>
            <h3>Dados</h3>
            <!-- aba -->
            <a href="#" class="aba-ativa">Matrículas</a>
            <!-- aba -->
            <a href="#" class="aba">Afiliados</a>
            <h3>Configurações</h3>
            <!-- aba -->
            <a href="#" class="aba">Contas</a>
        </article>
        <!-- logout -->
        <article class="guia logout">
            <h3>Logout</h3>
            <a href="php/logout.php" class="aba"><i class="material-icons">reply</i>Sair</a>
        </article>
    </section>

    <!-- MENU -->
    <section class="menu">
        <!-- btn-menu -->
        <a class="btn-menu"><i class="material-icons">menu</i></a>
        <!-- info -->
        <header class="info">
            <h1>Bem vindo <?php echo ucfirst($info["usuario"])?></h1>
            <!-- data -->
            <p class="data"><?php setlocale(LC_TIME, "pt_BR.utf-8", "portuguese");
            date_default_timezone_set('America/Sao_Paulo');
            echo ucwords(strftime('%A, %d de %B de %Y', strtotime('today')));?></p>

            <!-- status -->
            <article class="status">
                <p><i class="material-icons">how_to_reg</i> 17</p>
                <p><i class="material-icons">work</i> 124</p>
                <p><i class="material-icons">clear</i> 50</p>
            </article>
        </header>
    </section>

    <!-- PROPOSTA -->
    <section class="container proposta">
        <header class="info">
            <h1>Painel de propostas</h1>
        </header>
    </section>
    
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="js/tela_admin.js"></script>
    <script src="js/pred.js"></script>
</body>
</html>