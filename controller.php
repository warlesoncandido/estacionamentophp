<?php
    require 'class.conexao.php';
    require 'class.user.php';
    require 'class.user.service.php';
    require 'class.veiculo.php';
    require 'class.veiculo.service.php';

    session_start();
    
    

    $conexao = new Conexao();
    $user = new Usuario();

   

   

    if(isset($_GET['cadastro']) && $_GET['cadastro']== 1){
    
        

        $conexao = new Conexao();
        $user = new Usuario();
        

        $user->__set('nome',$_POST['nome']);
        $user->__set('email',$_POST['email']);
        $user->__set('senha',$_POST['senha']);

        $userService = new UsuarioService($conexao,$user);
        $userService->cadastrar();
        header('location:index.php');
    
    } else if(isset($_GET['login']) && $_GET['login']== 1){

        $conexao = new Conexao();
        $user = new Usuario();
        $userService = new UsuarioService($conexao,$user);
        $userService->validarLogin();
        

        

    }

    

    // CONTROLE DE VEICULOS    //

    if(isset($_GET['veiculo']) && $_GET['veiculo']==1 ){

        $veiculo = new Veiculo();
        $conexao = new Conexao();

        $veiculo->__set('placa',$_POST['placa']);
        $veiculo->__set('carro',$_POST['carro']);
        $veiculo->__set('entrada',$_POST['entrada']);

        print_r($veiculo);
        echo "<hr>";

        $veiculoService= new VeiculoService($conexao , $veiculo);
        $veiculoService->cadastrarVeiculo();
        header('location:estacionamento.php');
     }

?>