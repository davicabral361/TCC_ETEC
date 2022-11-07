<?php

    require_once("Ong.php");
    require_once("Conexao.php");

    class TelefoneOng{
        private $idTelefoneOng;
        private $idOng;
        private $telefoneOng;
        private $ong;

        public function getIdTelefoneOng(){
            return $this->idTelefoneOng;
        }
        public function getIdOng(){
            return $this->idOng;
        }
        public function getTelefoneOng(){
            return $this->telefoneOng;
        }
        public function getOng(){
            return $this->ong;
        }
        
        public function setIdTelefoneOng($idTelefoneOng){
            $this->idTelefoneOng = $idTelefoneOng;
        }
        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }
        public function setTelefoneOng($telefoneOng){
            $this->telefoneOng = $telefoneOng;
        }
        public function setOng($ong){
            $this->ong = $ong;
        }

        public function cadastrar($telefoneOng){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbtelefoneong(idtelefoneong,telefoneong,idong,tbtelefoneong.atividade) 
            VALUES(?,?,?,?)");

            $stmt->bindvalue(1, $telefoneOng->getIdTelefoneOng());
            $stmt->bindValue(2, $telefoneOng->getTelefoneOng());
            $stmt->bindvalue(3, $telefoneOng->getOng());
            $stmt->bindValue(4,1);
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idtelefoneong,telefoneong,nomeong
                            FROM tbtelefoneong
                            INNER JOIN tbong ON tbong.idong = tbtelefoneong.idong
                            WHERE tbtelefoneong.atividade <> 0";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idTelefoneOng) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbtelefoneong SET atividade = 0,telefoneong ='' WHERE idtelefoneong = ?");
            $stmt->bindValue(1,$idTelefoneOng);

            $stmt->execute();
        }

        public function alterar($idTelefoneOng, $telefoneOng) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbtelefoneong SET telefoneong = ?
                                        WHERE idtelefoneong = ?");
            $stmt->bindParam(1, $telefoneOng);
            $stmt->bindParam(2,$idTelefoneOng);

            $stmt->execute();
        }

        public function pesquisaTelefoneOng($nomeOng) {
            $conexao = Conexao::conectar();
            

            if(is_numeric($nomeOng)) {
                $querySelect=
                "SELECT 
                    idtelefoneong,telefoneong,nomeong
                FROM tbtelefoneong
                INNER JOIN tbong ON tbong.idong = tbtelefoneong.idong
                WHERE tbtelefoneong.atividade <> 0 AND telefoneong = $nomeOng";

                
            }
            else{
                $querySelect=
                "SELECT 
                    idtelefoneong,telefoneong,nomeong
                FROM tbtelefoneong
                INNER JOIN tbong ON tbong.idong = tbtelefoneong.idong
                WHERE tbtelefoneong.atividade <> 0 AND nomeong LIKE '%$nomeOng%'";
            }

            $resultado = $conexao->query($querySelect);

            $lista = $resultado->fetchAll();
            return $lista;
        }


}

?>