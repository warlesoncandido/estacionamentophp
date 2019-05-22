<?php

    require 'controller.php';
    
    if($_SESSION['acao'] === 'nao'){
        header('location:index.php?login=3');
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        img{
           0;
        }
    
    </style>

    <title>Estacionamento</title>

</head>
<body style="background-color:#0E111F">
    <div class="container">
        <div class="row">
            <div class=" col-md-12 text-center">
                <img src="img/loading.gif" alt="" class="img-responsive">
            </div>
        </div>
    </div>    
        <script>
            function passaTela(){
                window.location.href="estacionamento.php";

            }
            setInterval(passaTela, 000);

        </script>


    
</body>
</html>