<?php

    require_once("Ong.php");
    require_once("ItensDoacao.php");
    require_once("Conexao.php");

    class Doacao{
        private $idDoacao;
        private $dataDoacao;
        private $idOng;
        private $ong;

        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getDataDoacao(){
            return $this->dataDoacao;
        }
        public function getIdOng(){
            return $this->idOng;
        }
        public function getOng(){
            return $this->ong;
        }
        
        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setDataDoacao($dataDoacao){
            $this->dataDoacao = $dataDoacao;
        }
        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }
        public function setOng($ong){
            $this->ong = $ong;
        }

        public function cadastrar($doacao){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbdoacao(iddoacao,datadoacao,idong) 
            VALUES(?,?,?,?)");

            $stmt->bindvalue(1, $doacao->getIdDoacao());
            $stmt->bindValue(2, $doacao->getDataDoacao());
            $stmt->bindValue(3, $doacao->getOng());

            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT tbdoacao.iddoacao,datadoacao,nomeong,descitem
            ,quantidadeItensDoacao
                            FROM tbitensdoacao
                            INNER JOIN tbdoacao
                            ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
                            INNER JOIN tbong ON tbong.idong = tbdoacao.idong";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarItens($idDoacao) {
            $conexao = Conexao::conectar();
            $querySelect = 
            "SELECT 
                tbdoacao.iddoacao,descitem
            FROM tbdoacao
            INNER JOIN tbitensdoacao
                ON tbdoacao.iddoacao = tbitensdoacao.iddoacao
            WHERE tbdoacao.iddoacao = $idDoacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function deletar($idDoacao) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbdoacao WHERE iddoacao = $idDoacao";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        public function alterar($idDoacao, $dataDoacao) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbdoacao SET datadoacao = ? 
                                        WHERE iddoacao = ?");
            $stmt->bindParam(1, $dataDoacao);
            $stmt->bindParam(2,$idDoacao);

            $stmt->execute();
        }

        public function quantidadeDoacoesPorMes($mes){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT
                                COUNT(iddoacao)
                            FROM tbdoacao
                            WHERE MONTH(datadoacao) = $mes";
            $resultado = $conexao->query($querySelect);
            $dadosMes = $resultado->fetch();
            $dadosMes = $dadosMes[0];
            $dadosRetorno = (int)$dadosMes ;
            return $dadosRetorno;
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

        /*
            pesquisar por nome da ong e data. talvez fazer com categoria tbm.
        */
        // public function pesquisaDoacao($nomeOng,$dtInicio,$dtTermino) {
        //     $conexao = Conexao::conectar();
        //     if(($dtInicio == null) || ($dtTermino == null)) {
        //         $querySelect = "SELECT 
        //                                 iddoacao,datadoacao,nomeong
        //                         FROM tbdoacao
        //                         INNER JOIN tbong 
        //                             ON tbong.idong = tbdoacao.idong
        //                         WHERE nomeong LIKE '$nomeOng' ";
        //     }
        //     else{
        //         if($nomeOng == null) {
        //             $querySelect=
        //             "SELECT 
        //                 iddoacao,datadoacao,nomeong
        //             FROM tbdoacao
        //             INNER JOIN tbong 
        //                 ON tbong.idong = tbdoacao.idong
        //             WHERE datadoacao BETWEEN '$dtInicio' AND '$dtTermino'
        //             ";
        //         }
        //         else{
        //             $querySelect=
        //             "SELECT 
        //                 iddoacao,datadoacao,nomeong
        //             FROM tbdoacao
        //             INNER JOIN tbong 
        //                 ON tbong.idong = tbdoacao.idong
        //             WHERE nomeong LIKE '$nomeOng' 
        //             AND datadoacao BETWEEN '$dtInicio' AND '$dtTermino'
        //             ";
        //         }
        //     }

        //     $resultado = $conexao->query($querySelect);
        //     $lista = $resultado->fetchAll();
        //     return $lista;
        // }
}

?>