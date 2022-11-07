<?php 

    require_once("Conexao.php");

    class Admin {

        private $idAdmin;
        private $nomeAdmin;
        private $emailAdmin;
        private $senhaAdmin;
        private $cpfAdmin;
        private $dataNascAdmin;
        private $cepAdmin;
        private $estadoAdmin;
        private $cidadeAdmin;
        private $bairroAdmin;
        private $ruaAdmin;
        private $complementoAdmin;
        private $logradouroAdmin;
        private $dataInscricao;

        public function getIdAdmin() {
            return $this->idAdmin;
        }

        public function setIdAdmin($idAdmin) {
            $this->idAdmin = $idAdmin;
        }

        public function getNomeAdmin() {
            return $this->nomeAdmin;
        }

        public function setNomeAdmin($nomeAdmin) {
            $this->nomeAdmin = $nomeAdmin;
        }

        public function getEmailAdmin() {
            return $this->emailAdmin;
        }

        public function setEmailAdmin($emailAdmin) {
            $this->emailAdmin = $emailAdmin;
        }

        public function getSenhaAdmin() {
            return $this->senhaAdmin;
        }

        public function setSenhaAdmin($senhaAdmin) {
            $this->senhaAdmin = $senhaAdmin;
        }

        public function getCpfAdmin() {
            return $this->cpfAdmin;
        }

        public function setCpfAdmin($cpfAdmin) {
            $this->cpfAdmin = $cpfAdmin;
        }

        public function getDataNascAdmin() {
            return $this->dataNascAdmin;
        }

        public function setDataNascAdmin($dataNascAdmin) {
            $this->dataNascAdmin = $dataNascAdmin;
        }

        public function getCepAdmin() {
            return $this->cepAdmin;
        }

        public function setCepAdmin($cepAdmin) {
            $this->cepAdmin = $cepAdmin;
        }

        public function getEstadoAdmin() {
            return $this->estadoAdmin;
        }

        public function setEstadoAdmin($estadoAdmin) {
            $this->estadoAdmin = $estadoAdmin;
        }

        public function getCidadeAdmin() {
            return $this->cidadeAdmin;
        }

        public function setCidadeAdmin($cidadeAdmin) {
            $this->cidadeAdmin = $cidadeAdmin;
        }

        public function getBairroAdmin() {
            return $this->bairroAdmin;
        }

        public function setBairroAdmin($bairroAdmin) {
            $this->bairroAdmin = $bairroAdmin;
        }

        public function getRuaAdmin() {
            return $this->ruaAdmin;
        }

        public function setRuaAdmin($ruaAdmin) {
            $this->ruaAdmin = $ruaAdmin;
        }

        public function getComplementoAdmin() {
            return $this->complementoAdmin;
        }

        public function setComplementoAdmin($complementoAdmin) {
            $this->complementoAdmin = $complementoAdmin;
        }

        public function getLogradouroAdmin() {
            return $this->logradouroAdmin;
        }

        public function setLogradouroAdmin($logradouroAdmin) {
            $this->logradouroAdmin = $logradouroAdmin;
        }

        public function getDataInscricaoAdmin() {
            return $this->dataInscricao;
        }

        public function setDataInscricaoAdmin($dataInscricao) {
            $this->dataInscricao = $dataInscricao;
        }

        public function cadastrar ($admin){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbadmin(idadmin,cidadeadmin, 
            bairroadmin,complementoadmin,estadoadmin,
            ruaadmin,cepadmin,nomeadmin,logradouroadmin,datanascadmin, 
            emailadmin,senhaadmin,cpfadmin, datainscricao) VALUES(?,?,?,?,?,?,?,?,?,?,?,MD5(?),?,?)");
            $stmt->bindvalue(1, $admin->getIdAdmin());
            $stmt->bindvalue(2, $admin->getCidadeAdmin());
            $stmt->bindvalue(3, $admin->getBairroAdmin());
            $stmt->bindvalue(4, $admin->getComplementoAdmin());
            $stmt->bindvalue(5, $admin->getEstadoAdmin());
            $stmt->bindvalue(6, $admin->getRuaAdmin());
            $stmt->bindvalue(7, $admin->getCepAdmin());
            $stmt->bindvalue(8, $admin->getNomeAdmin());
            $stmt->bindValue(9, $admin->getLogradouroAdmin());
            $stmt->bindValue(10, $admin->getDataNascAdmin());
            $stmt->bindvalue(11, $admin->getEmailAdmin());
            $stmt->bindvalue(12, $admin->getSenhaAdmin());
            $stmt->bindvalue(13, $admin->getCpfAdmin());
            $stmt->bindvalue(14, $admin->getDataInscricaoAdmin());
            
            $stmt->execute();
                                                                               
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            idadmin,cidadeadmin,bairroadmin,cpfadmin,complementoadmin,estadoadmin,ruaadmin,
                            cepadmin,nomeadmin,logradouroadmin,datanascadmin,emailadmin,senhaadmin,datainscricao 
                            FROM tbadmin";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        public function deletar($idAdmin) {
            $conexao = Conexao::conectar();
            $queryDelete = "DELETE FROM tbadmin WHERE idadmin = $idAdmin";
            $resultado = $conexao->query($queryDelete);
            return  $resultado;
        }

        public function alterar($idAdmin, $nomeAdmin, $emailAdmin, $cpfAdmin, $dataNascAdmin, $cidadeAdmin, $estadoAdmin, $bairroAdmin, $ruaAdmin, $cepAdmin, $compAdmin, $lugradouroAdmin, $senhaAdmin ) 
        {
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbadmin SET nomeadmin = ?, emailadmin = ?, cpfadmin = ?, dataNascadmin = ?, 
                                        cidadeadmin = ?, estadoadmin = ?, bairroadmin = ?, ruaadmin = ?, 
                                        cepadmin = ?, complementoadmin = ?, logradouroadmin = ?, senhaadmin = ?
                                        WHERE idAdmin = ?");
            $stmt->bindParam(1, $nomeAdmin);
            $stmt->bindParam(2,$emailAdmin);
            $stmt->bindParam(3,$cpfAdmin);
            $stmt->bindParam(4,$dataNascAdmin);
            $stmt->bindParam(5,$cidadeAdmin);
            $stmt->bindParam(6,$estadoAdmin);
            $stmt->bindParam(7,$bairroAdmin);
            $stmt->bindParam(8,$ruaAdmin);
            $stmt->bindParam(9,$cepAdmin);
            $stmt->bindParam(10,$compAdmin);
            $stmt->bindParam(11,$lugradouroAdmin);
            $stmt->bindParam(12,$senhaAdmin);
            $stmt->bindParam(13,$idAdmin);

            $stmt->execute();
        }

        public function pesquisaAdmin($nomeAdmin) {
            $conexao = Conexao::conectar();
            $querySelect=
                                    "SELECT 
                                        idadmin,cidadeadmin,bairroadmin,cpfadmin,complementoadmin,estadoadmin,ruaadmin,
                                        cepadmin,nomeadmin,lugradouroadmin,datanascadmin,emailadmin,senhaadmin,datainscricao 
                                    FROM tbadmin WHERE nomeadmin LIKE '$nomeAdmin'";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

    }

?>