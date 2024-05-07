
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renda fixa</title>
</head>
<body>
    <!-- detalhe importante, isset é utilizado para ver se uma varivael foi setada -->
<?php
// precisa dar dnv o session_start() para a aplicação conseguir recuperar os valores

    session_start();
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo.png" class="img-fluid" alt="logo que se assemelha a um cofrinho de um porco">
            finanças
        </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action = "valida_login.php" method="post">
                <div class="form-group">
                  <input name = 'email' type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name = 'senha' type="password" class="form-control" placeholder="Senha">
                </div>
                <?if(isset($_GET['login'])){?>
                    <div class="text-danger">
                        Senha ou Login incorretos
                    </div>
                <?}?>
                <?if(isset($_GET['acesso'])){?>
                    <div class="text-danger">
                        Você não está autorizado a entrar nesta página
                    </div>
                <?}?>
                <button class="btn btn-primary" type='submit'>Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
</body>
</html>