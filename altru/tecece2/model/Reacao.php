<?php

    require_once("Conexao.php");

    class Reacao {
        private $idReacao;
        private $tipoReacao;
        private $dtReacao;
        private $idPost;
        private $idPerfil;
        private $tipoPerfil;

        public function getIdReacao() {
            return $this->idReacao;
        }

        public function getTipoReacao() {
            return $this->tipoReacao;
        }

        public function getDtReacao() {
            return $this->dtReacao;
        }

        public function getIdPost() {
            return $this->idPost;
        }

        public function getIdPerfil() {
            return $this->idPerfil;
        }

        public function getTipoPerfil() {
            return $this->tipoPerfil;
        }

        public function setIdReacao($idReacao) {
            $this->idReacao = $idReacao;
        }

        public function setTipoReacao($tipoReacao) {
            $this->tipoReacao = $tipoReacao;
        }

        public function setDtReacao($dtReacao) {
            $this->dtReacao = $dtReacao;
        }
        
        public function setIdPost($idPost) {
            $this->idPost = $idPost;
        }

        public function setIdPerfil($idPerfil) {
            $this->idPerfil = $idPerfil;
        }

        public function setTipoPerfil($tipoPerfil) {
            $this->tipoPerfil = $tipoPerfil;
        }

        // public function verificarCurtida($idPerfil,$tipoPerfil) {
        //     $conexao = Conexao::conectar();
        //     if($tipoPerfil == "ong") {

        //     }
        //     $verificacao = "SELECT * FROM tbreacao WHERE EXISTS(SELECT * FROM tbreacao INNER JOIN tb WHERE idperfil = $idPerfil AND tbong.idong = $idPerfil)";
        // }

        public function reagir($reagir) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbreacao(idreacao,tiporeacao,datareacao,idpost,atividade, idperfil,tipoperfil) VALUES(?,?,?,?,?,?,?) ");

            $stmt->bindValue(1,$reagir->getIdReacao());
            $stmt->bindValue(2,$reagir->getTipoReacao());
            $stmt->bindValue(3,$reagir->getDtReacao());
            $stmt->bindValue(4,$reagir->getIdPost());
            $stmt->bindValue(5,1);
            $stmt->bindValue(6,$reagir->getIdPerfil());
            $stmt->bindValue(7,$reagir->getTipoPerfil());

            $stmt->execute();
        }

        public function deletar($idReacao) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbreacao SET atividade = ? WHERE idreacao = ?");

            $stmt->bindParam(1,0);
            $stmt->bindParam(1,$idReacao);

            $stmt->execute();
        }

        public function listar($idPost) {
            $conexao = Conexao::conectar();
            $stmt_1 = $conexao->prepare("SELECT * FROM tbreacao WHERE EXISTS(SELECT * FROM tbreacao WHERE idperfil = ? AND tipoperfil = ?");
            if($stmt_1->rowCount() <= 0) {
                return false;
            }
            else if($stmt_1->rowCount() > 0) {
                //VERIFICA SE É ONG//
                $stmt_2 = $conexao->prepare("SELECT * FROM tbong WHERE idong = ?");
                if($stmt_2->rowCount() > 0)
            }
        }

    }

?>