<?php
    require 'controller.php';
    $_SESSION['acao'] = 'nao';
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/estacionamento.png">
    <title>Estacionamento</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Estacionamento</a>
    </nav>
    <div class="container">
        <div class="container-fluid formLogin">
            <form action="controller.php?login=1" method="POST">
                <div class="form-group">
                    <label for="usuario">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="*********" class="form-control">
                </div>
                <div class='erro'>
                    <?if(isset($_GET['login']) && $_GET['login']== 2){?>
                        <h5 class="bg-danger text-white">Usuario e/ou Senha invalidos</h5>
                    <?}else if(isset($_GET['login']) && $_GET['login']== 3){?>  
                        <h5 class="bg-danger text-white">Faça o login corretamente</h5> 
                    <?}?> 

                
                </div>
                <a href="" id="esqueci">Esqueci minha senha</a> / <a href="" id="cadastrar" >Cadastrar</a>
                <button class="btn btn-primary btn-block btn-large">Entrar</button>
                <div id="areaCad"></div>
            </form>
        </div>
    </div>

    <script src="js/scripit.js"></script>
</body>
</html>