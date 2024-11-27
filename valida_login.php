<?php
    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    foreach($usuarios_app as $user){
        print_r($user)
    }

    // $_GET['email'];
    // $_GET['senha'];

    $_POST['email'];
    $_POST['senha'];
?>