<?php

    require_once("Conexao.php");

    class Seguindo {
        private $idSeguindo;
        private $idOng;
        private $idDoador;

        public function getIdSeguindo() {
            return $this->idSeguindo;
        }

        public function getIdOng() {
            return $this->idOng;
        }

        public function getIdDoador() {
            return $this->idDoador;
        }

        public function setIdSeguindo($idSeguindo) {
            $this->idSeguindo = $idSeguindo;
        }

        public function setIdOng($idOng) {
            $this->idOng = $idOng;
        }

        public function setIdDoador($idDoador) {
            $this->idDoador = $idDoador;
        }

        public function seguir($seguindo) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbseguindo (idseguindo,idong,iddoador) VALUES(?,?,?)");
    
            $stmt->bindValue(1,$seguindo->getIdSeguindo());
            $stmt->bindValue(2,$seguindo->getIdOng());
            $stmt->bindValue(3,$seguindo->getIdDoador());

            $stmt->execute();
        }

        public function deletar($idDoador,$idOng) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("DELETE FROM tbseguindo WHERE iddoador = ? AND idong = ?");

            $stmt->bindParam(1,$idDoador);
            $stmt->bindParam(2,$idOng);

            $stmt->execute();
        }

        public function verificarSeguir($idDoador,$idOng) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT COUNT(*) FROM tbseguindo WHERE iddoador = $idDoador AND idong = $idOng";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista[0];
        }

    
    }

?>