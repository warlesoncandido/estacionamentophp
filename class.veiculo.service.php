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
        public function saidaVeiculo(){

            
        }


    }

?>