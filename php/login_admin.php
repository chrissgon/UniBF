<?php
    // INICIANDO SESSAO
    session_start();

    // REQUERINDO ARQUIVOS
    require_once "conexao.php";
    require_once "admin.php";

    // INSTANCIANDO CLASSES
    $admin = new Admin($conexao);

    // PEGANDO VALORES
    $usuario = filter_input(INPUT_POST, "usuario");
    $senha = md5(filter_input(INPUT_POST, "senha"));

    // INSERINDO VALORES
    $admin->setUsuario($usuario)->setSenha($senha);

    // EXECUTANDO VERIFICAÇÃO
    $login = $admin->login();

    // CRIAR CLASSE DO USUARIO
    $info = [
        "usuario" => $usuario,
        "senha" => $senha
    ];

    if($login){
        $_SESSION["info"] = $info;
        header("location: ../tela_admin.php");
    }
    else{
        $_SESSION["msg"] = "Login inválido!";
        header("location: ../tela_login.php");
    }
    
?>