<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro de Afiliados</title>

    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Cadastro de Afiliados">
    <meta name="description" content="Estude a qualquer hora e de qualquer lugar 100% online. São centenas de cursos intensivos com início imediato. Modalidade Online. Forme-se em 3 meses. TCC Opcional. Reconhecido pelo MEC. Cursos: Pós Graduação e MBA, Segunda Graduação, Formação Pedagógica e Extensão Universitária e de Aperfeiçoamento.">
    <meta name="keywords" content="pós-gradução, mba, online, presencial, semi-presencial, a distancia, pos, ead, formação pedagógica, segunda licenciatura, concursos, instituto brasileiro de formação, extensão, segunda graduação, graduação">
    <meta name="author" content="">
    <meta name="date" content="01 de dez. de 2019">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/tela_afiliado.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- LOGO -->
    <link rel="icon" href="img/logo.jpg">
</head>
<body>
    <!-- BTN-FLOAT -->
    <a href="index.html" class="btn-float"><i class="material-icons">home</i></a>

    <!-- CADASTRO -->
    <form action="" method="post" class="cadastro">
        <!-- header -->
        <header class="header">
            <h1><i class="material-icons">add</i>Cadastro de Afiliados</h1>
        </header>
        <!-- info -->
        <article class="info">
            <!-- campo -->
            <article class="campo cnpj">
                <input type="text" name="cnpj" minlength="14" maxlength="14" pattern="[0-9]+$" title="Somente números" placeholder="CNPJ" required>
                <article class="status">
                    <i class="material-icons sucesso">done</i>
                    <i class="material-icons erro">clear</i>
                    <i class="material-icons busca">trip_origin</i>
                </article>
            </article>
            <p class="campo email">
                <input type="email" name="email" placeholder="Email">
                <a class="btn-email adicionar"><i class="material-icons">add</i></a>
            </p>
        </article>
    </form>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="js/tela_afiliado.js"></script>
    <script src="js/index.js"></script>
</body>
</html>