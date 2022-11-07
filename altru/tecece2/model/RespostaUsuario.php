<?php
    require_once("Doacao.php");
    require_once("Doador.php");
    require_once("Conexao.php");

    class RespostaUsuario{
        private $idRespostaUsuario;
        private $simOuNao;
        private $idDoacao;
        private $idDoador;
        private $doacao;
        private $doador;

        public function getIdRespostaUsuario(){
            return $this->idRespostaUsuario;
        }
        public function getSimOuNao(){
            return $this->simOuNao;
        }
        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getIdDoador(){
            return $this->idDoador;
        }
        public function getDoacao(){
            return $this->doacao;
        }
        public function getDoador(){
            return $this->doador;
        }
        


        public function setIdRespostaUsuario($idRespostaUsuario){
            $this->idRespostaUsuario = $idRespostaUsuario;
        }
        public function setSimOuNao($simOuNao){
            $this->simOuNao = $simOuNao;
        }
        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setIdDoador($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setDoacao($doacao){
            $this->doacao = $doacao;
        }
        public function setDoador($doador){
            $this->doador = $doador;
        }

        public function cadastrar($respostausuario){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbrespostausuario(idrespostausuario,simounao,iddoador,iddoacao) 
            VALUES(?,?,?,?)");

            $stmt->bindValue(1, $respostausuario->getIdRespostaUsuario());
            $stmt->bindValue(2, $respostausuario->getSimOuNao());
            $stmt->bindValue(3, $respostausuario->getDoador()->getIdDoador());
            $stmt->bindValue(4, $respostausuario->getDoacao()->getIdDoacao());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idrespostausuario,simounao,nomedoador,descItem
                            FROM tbdoador
                            INNER JOIN tbrespostausuario ON tbdoador.iddoador = tbrespostausuario.iddoador
                            INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbrespostausuario.iddoacao
                            INNER JOIN tbitensdoacao ON tbitensdoacao.iddoacao = tbdoacao.iddoacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idRespostaUsuario) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbrespostausuario WHERE idrespostausuario = $idRespostaUsuario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        public function alterar($idRespostaUsuario, $simOuNao, $nomeDoador, $descItem) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbdoador 
                                        INNER JOIN tbrespostausuario ON tbdoador.iddoador = tbrespostausuario.iddoador
                                        INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbrespostausuario.iddoacao
                                        INNER JOIN tbitensdoacao ON tbitensdoacao.iddoacao = tbdoacao.iddoacao
                                        SET simounao = ?, nomedoador = ?, descitem = ?
                                        WHERE tbrespostausuario.idrespostausuario = ?");
            $stmt->bindParam(1, $simOuNao);
            $stmt->bindParam(2,$nomeDoador);
            $stmt->bindParam(3,$descItem);
            $stmt->bindParam(4,$idRespostaUsuario);

            $stmt->execute();
        }

        public function pesquisaResposta($resposta) {
            $conexao = Conexao::conectar();

            if(is_numeric($resposta)) {
                $querySelect=
                "SELECT 
                    idrespostausuario,simounao,nomedoador,descItem
                FROM tbdoador
                INNER JOIN tbrespostausuario ON tbdoador.iddoador = tbrespostausuario.iddoador
                INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbrespostausuario.iddoacao
                INNER JOIN tbitensdoacao ON tbitensdoacao.iddoacao = tbdoacao.iddoacao
                WHERE tbrespostausuario.idrespostausuario = $resposta";
            }
            else{
                $querySelect=
                "SELECT 
                    idrespostausuario,simounao,nomedoador,descItem
                FROM tbdoador
                INNER JOIN tbrespostausuario ON tbdoador.iddoador = tbrespostausuario.iddoador
                INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbrespostausuario.iddoacao
                INNER JOIN tbitensdoacao ON tbitensdoacao.iddoacao = tbdoacao.iddoacao
                WHERE nomedoador LIKE '%$resposta%' AND tbdoador.atividade <> 0";
            }

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

}

?>