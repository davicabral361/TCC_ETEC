<?php

    require_once("Conexao.php");
    require_once("Doador.php");

    class TelefoneDoador{
        private $idTelefoneDoador;
        private $idDoador;
        private $telefoneDoador;
        private $doador;

        public function getIdTelefoneDoador(){
            return $this->idTelefoneDoador;
        }
        public function getIdDoador(){
            return $this->idDoador;
        }
        public function getTelefoneDoador(){
            return $this->telefoneDoador;
        }
        public function getDoador(){
            return $this->doador;
        }
        


        public function setIdTelefoneDoador($idTelefoneDoador){
            $this->idTelefoneDoador = $idTelefoneDoador;
        }
        public function setIdOng($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setTelefoneDoador($telefoneDoador){
            $this->telefoneDoador = $telefoneDoador;
        }
        public function setDoador($doador){
            $this->doador = $doador;
        }

        public function cadastrar($telefoneDoador){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbtelefonedoador(idtelefonedoador,telefonedoador,iddoador,atividade) 
            VALUES(?,?,?,?)");

            $stmt->bindvalue(1, $telefoneDoador->getIdTelefoneDoador());
            $stmt->bindValue(2, $telefoneDoador->getTelefoneDoador());
            $stmt->bindValue(3, $telefoneDoador->getDoador());
            $stmt->bindValue(4,1);
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idtelefonedoador,telefonedoador,nomedoador
                            FROM tbtelefonedoador
                            INNER JOIN tbdoador ON tbdoador.iddoador = tbtelefonedoador.iddoador
                            WHERE tbtelefonedoador.atividade <> 0";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idTelefoneDoador) {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbtelefonedoador SET atividade = 0,telefonedoador = '' WHERE idtelefonedoador = ?");
            $stmt->bindParam(1,$idTelefoneDoador);

            $stmt->execute();
        }

        public function alterar($idTelefoneDoador, $telefoneDoador) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbtelefonedoador SET telefonedoador = ?
                                        WHERE idtelefonedoador = ?");
            $stmt->bindParam(1, $telefoneDoador);
            $stmt->bindParam(2,$idTelefoneDoador);

            $stmt->execute();
        }

        public function pesquisaTelefoneDoador($nomeDoador) {
            $conexao = Conexao::conectar();
            

            if(is_numeric($nomeDoador)) {
                $querySelect=
                "SELECT 
                    idtelefonedoador,telefonedoador,nomedoador
                FROM tbtelefonedoador
                INNER JOIN tbdoador ON tbdoador.iddoador = tbtelefonedoador.iddoador
                WHERE tbtelefonedoador.atividade <> 0 AND telefonedoador = $nomeDoador";

                
            }
            else{
                $querySelect = "SELECT idtelefonedoador,telefonedoador,nomedoador
                            FROM tbtelefonedoador
                            INNER JOIN tbdoador ON tbdoador.iddoador = tbtelefonedoador.iddoador
                            WHERE tbtelefonedoador.atividade <> 0 AND nomedoador LIKE '%$nomeDoador%'";
            }

            $resultado = $conexao->query($querySelect);

            $lista = $resultado->fetchAll();
            return $lista;
        }

}

?>