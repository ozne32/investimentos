<?php
    session_start();
    if(!$_SESSION['valida']){
        header('Location: index.php?acesso=erro');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimento</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/3a7cbcc65c.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo.png" class="img-fluid" alt="logo que se assemelha a um cofrinho de um porco">
            finanças
        </a>
        <ul class="navbar-nav" >
          <li class="nav-item" ><a class="nav-link" href='logoff.php'>SAIR</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Calcula Investimentos
            </div>
            <div class="card-body" >
                <form action="calcula_investimento.php" method='post'>
                    <div class="row mb-3" >
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend" >
                                    <span class="input-group-text"><i class="fa-solid fa-brazilian-real-sign"></i></span>
                                </div>
                                <input class="form-control" name ="dinheiro" type="number" placeholder="Quanto gostaria de investir">
                            </div>
                        </div>
                        <div class="col-md-3" >
                            <input name = 'data_inicial' class="form-control" type="date" placeholder='data inicial dos investimentos'>              
                        </div>
                        <div class="col-md-3" >
                            <input class="form-control" name="data_final" type="date" placeholder = 'data final dos investimentos'>
                        </div>
                    </div>
                    <div class="form-group mb-5" >
                        <select class="form-control" name = 'op_invest' >
                            <option value="0">--escolha uma opção de investimento--</option>
                            <option value="1">CDB</option>
                            <option value="2">LCI</option>
                            <option value="3">LCA</option>
                            <option value="4">Tesouro Selic</option>
                        </select>
                    </div>
                    <? if(isset($_GET['preenchimento'])){?>
                        <div class="text-danger">
                            Preencha todos os campos corretamente
                        </div>
                    <?}?>
                    <button type="submit" class="btn btn-primary" >Simular</button>
                </form>
                <? if(isset($_GET['dinheiro']) && isset($_GET['investimento'])){ ?>
                    <p class="lead font-weight-bold">O seu investimento rendeu: <b>R$<?=$_GET['dinheiro']?>,00</b> em <?=$_GET['investimento']?></p>
                <?}?>
            </div>
        </div>
    </div>
</body>
</html>