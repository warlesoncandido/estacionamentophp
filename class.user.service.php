<?php

    class UsuarioService{

        private $conexao;
        private $user;

        public function __construct(Conexao $conexao, Usuario $user){

            $this->conexao = $conexao->conectar();
            $this->user= $user;

        }

         function cadastrar(){
            $query='insert into user(email,nome,senha)values(:email,:nome,:senha);
                )';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email',$this->user->__get('email'));   
            $stmt->bindValue(':nome',$this->user->__get('nome'));  
            $stmt->bindValue(':senha',$this->user->__get('senha'));
            $stmt->execute();   

        }
        function validarLogin(){
            $query = 'select * from user where email= :email and senha= :senha';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email',$_POST['email']);   
            $stmt->bindValue(':senha',$_POST['senha']);
            $stmt->execute();

            $resultado = $stmt->rowCount();

            if($resultado != 0 ){
                $_SESSION['acao']='autenticado';
                header('location:home.php');
            }else{
                $_SESSION['acao']='nao';

                header('location:index.php?login=2');
            }
        }
         function editar(){

            
        }


    }

?>