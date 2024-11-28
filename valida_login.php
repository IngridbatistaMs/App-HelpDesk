<?php

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;


    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    // echo '<prev';
    // print_r ($usuarios_app);
    // echo '</prev>';

    foreach($usuarios_app as $user){

        if($user['email'] ==  $_POST['email'] && $user['senha'] ==  $_POST['senha']){
            $usuario_autenticado = true;
        }
   
    }

    if ($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php);
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    // $_GET['email'];
    // $_GET['senha'];

    // print_r($_POST);
    // echo '<br/>';
    // echo $_POST['email'];
    // echo '<br/>';
    // echo $_POST['senha'];
?>