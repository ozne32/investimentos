<?php
    session_start();
    $valida_dados = false;
    $usuarios = array(
        array("email"=> "artreus@gmail.com", "senha" =>1234),
        array("email"=> "gaya@gmail.com", "senha" =>1234),
    );
    foreach( $usuarios as $usuario ) {
        if($usuario["email"] == $_POST["email"] && $usuario['senha'] == $_POST["senha"]) {
            $valida_dados = true;
            header('Location: centroinvest.php');
        }
    }
    if($valida_dados) {
        $_SESSION['valida'] = true;
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['valida'] = false;
    }

?>