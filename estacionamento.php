<?php

    require 'controller.php';
    
    if($_SESSION['acao'] === 'nao'){
        header('location:index.php?login=3');
    }
   

?>
<html lang="pt-BR">
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
        <div class="row">
            <div class="col-md-3 formVeiculo">
                <form action="controller.php?veiculo=1" method="POST">
                    <div class="form-group">
                        <label for="" class="text-white">Placa</label>
                        <input type="text" class="form-control" name="placa" id="placa" placeholder="HIJ-3333">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-white">Carro</label>
                        <input type="text" class="form-control" name="carro" id="carro" placeholder="Palio">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-white">Entrada</label>
                        <input type="text" class="form-control" name="entrada" id="entrada"  readonly>
                    </div>
                    <button class="btn btn-large btn-block btn-success">Cadastrar</button>
                </form>            
            </div>
            <div class="col-md-9 listaVeiculos">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <td>Placa</td>
                            <td>Carro</td>
                            <td>Entrada</td>
                            <td>Ação</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?foreach($veiculos as $veiculo){?>
                        <tr>
                            <td><?=$veiculo->placa?></td>
                            <td><?=$veiculo->carro?></td>
                            <td><?=$veiculo->entrada?></td>
                            <td><button class="btn btn-danger" onclick="saida(<?=$veiculo->entrada?>,'<?=$veiculo->id?>')">Saida</a></td>
                        </tr> 
                    <?}?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   <script>
            var data = new Date();
            var hora = data.getHours()+":"+data.getMinutes();
            var resultado = hora.replace(":",".");
        function horas(){
            
            
            document.querySelector('#entrada').value=resultado ;
        }

        setInterval(() => {
            horas()
        }, 1000);
       
            
        function saida(entrada,id){

            var valor =Number(resultado)-Number(entrada);
            var result=Math.round(valor*7.50)
            confirm("R$"+result);
            
            window.location.href= "controller.php?id="+id+"&&valor="+result+"&&data"+data(day,month,year);

        }
   </script>
</body>
</html>