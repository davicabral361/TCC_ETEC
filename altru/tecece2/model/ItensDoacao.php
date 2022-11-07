<?php

    require_once("Doacao.php");

    class ItensDoacao{
        private $idItensDoacao;
        private $descItem;
        private $quantidadeItensDoacao;
        private $idDoacao;
        private $doacao;

        public function getIdItensDoacao(){
            return $this->idItensDoacao;
        }
        public function getDescItem(){
            return $this->descItem;
        }
        public function getQuantidadeItensDoacao(){
            return $this->quantidadeItensDoacao;
        }
        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getDoacao(){
            return $this->doacao;
        }

        public function setIdItensDoacao($idItensDoacao){
            $this->idItensDoacao = $idItensDoacao;
        }
        public function setDescItem($descItem){
            $this->descItem = $descItem;
        }
        public function setQuantidadeItensDoacao($quantidadeItensDoacao){
            $this->quantidadeItensDoacao = $quantidadeItensDoacao;
        }
        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setDoacao($doacao){
            $this->doacao = $doacao;
        }


        public function cadastrar($itensDoacao){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbitensdoacao(iditensdoacao,descitem,
            quantidadeitensdoacao,iddoacao) 
            VALUES(?,?,?,?)");

            $stmt->bindValue(1, $itensDoacao->getIdItensDoacao());
            $stmt->bindValue(2, $itensDoacao->getDescItem());
            $stmt->bindValue(3, $itensDoacao->getQuantidadeItensDoacao());
            $stmt->bindValue(4, $itensDoacao->getDoacao());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT iditensdoacao,nomeong,quantidadeitensdoacao,descitem,datadoacao
                            FROM tbitensdoacao
                            INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                            INNER JOIN tbong ON tbong.idong = tbdoacao.idong
                            ORDER BY tbitensdoacao.iditensdoacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idItensDoacao) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbitensdoacao WHERE iditensdoacao = $idItensDoacao";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        public function alterar($idItensDoacao, $descItem, $quantidadeItensDoacao, $dataDoacao, $ong) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbitensdoacao
                                        INNER JOIN tbdoacao
                                            ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                                            INNER JOIN tbong
                                                ON tbdoacao.idong = tbong.idong
                                        SET descitem = ?, quantidadeitensdoacao = ?, datadoacao = ?, nomeong = ?
                                        WHERE tbitensdoacao.iditensdoacao = ?");
            $stmt->bindParam(1, $descItem);
            $stmt->bindParam(2,$quantidadeItensDoacao);
            $stmt->bindParam(3,$dataDoacao);
            $stmt->bindParam(4,$ong);
            $stmt->bindParam(5,$idItensDoacao);

            $stmt->execute();
        }

        public function pesquisaItensDoacao($idItensDoacao){
            $conexao = Conexao::conectar();
            if(is_numeric($idItensDoacao)) {
            $querySelect = "SELECT iditensdoacao,nomeong,quantidadeitensdoacao,descitem,datadoacao
                            FROM tbitensdoacao
                            INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                            INNER JOIN tbong ON tbong.idong = tbdoacao.idong
                            WHERE tbitensdoacao.iditensdoacao = $idItensDoacao
                            ORDER BY tbitensdoacao.iditensdoacao";

            }
            else {
                $querySelect = "SELECT iditensdoacao,nomeong,quantidadeitensdoacao,descitem,datadoacao
                            FROM tbitensdoacao
                            INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                            INNER JOIN tbong ON tbong.idong = tbdoacao.idong
                            WHERE nomeong LIKE '%$idItensDoacao%'
                            ORDER BY tbitensdoacao.iditensdoacao";
            }
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function pesquisaDoacao($nomeOng) {
            $conexao = Conexao::conectar();
            if(is_numeric($nomeOng)){
                $querySelect = "SELECT 
                                    tbitensdoacao.iditensdoacao,quantidadeitensdoacao,tbdoacao.iddoacao,descitem,datadoacao,nomeong
                                FROM tbitensdoacao
                                INNER JOIN tbdoacao 
                                    ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                                    INNER JOIN tbong 
                                    ON tbdoacao.idong = tbong.idong
                                WHERE tbitensdoacao.iditensdoacao = $nomeOng ";
            }
            else{
                $querySelect = "SELECT 
                                    tbitensdoacao.iditensdoacao,quantidadeitensdoacao,tbdoacao.iddoacao,descitem,datadoacao,nomeong
                                FROM tbitensdoacao
                                INNER JOIN tbdoacao 
                                    ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                                    INNER JOIN tbong 
                                        ON tbdoacao.idong = tbong.idong
                                WHERE tbong.nomeong LIKE '%$nomeOng%' ";
            }

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

}
