<?php

    class VeiculoService{

        private $conexao;
        private $veiculo;

        function __construct(Conexao $conexao, Veiculo $veiculo){

            $this->conexao= $conexao->conectar();
            $this->veiculo=$veiculo;

        }

        public function cadastrarVeiculo(){

            $query = 'insert into veiculos(placa,carro,entrada)values(:placa,:carro,:entrada)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':placa',$this->veiculo->__get('placa'));
            $stmt->bindValue(':carro',$this->veiculo->__get('carro'));
            $stmt->bindValue(':entrada',$this->veiculo->__get('entrada'));
            $stmt->execute();


        }
        public function recuperarVeiculo(){
            $query = 'select * from veiculos';
            $stmt= $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

            
        }
        public function remover(){
            $query = 'delete from veiculos where id = :id';
            $stmt= $this->conexao->prepare($query);
            $stmt->bindValue(':id',$_GET['id']);
            $stmt->execute();
            
        }
        public function addValores(){
            $query = 'insert into valor(data,valor)values(:data,:valor)';
            $stmt= $this->conexao->prepare($query);
            $stmt->bindValue(':data',$_GET['data']);
            $stmt->bindValue(':valor',$_GET['valor']);
            $stmt->execute();

        }


    }

?>