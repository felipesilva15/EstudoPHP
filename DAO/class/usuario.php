<?php

class Usuario {
    private $pkId, $dsLogin, $dsSenha, $dtCadastro;  

    public function getPkId():int{
        return $this->pkId;
    }

    public function setPkId($pkId){
        $this->pkId = $pkId;
    }

    public function getDsLogin():string{
        return $this->dsLogin;
    }

    public function setDsLogin($dsLogin){
        $this->dsLogin = $dsLogin;
    }

    public function getDsSenha():string{
        return $this->dsSenha;
    }

    public function setDsSenha($dsSenha){
        $this->dsSenha = $dsSenha;
    }

    public function getdtCadastro(){
        return $this->dtCadastro;
    }

    public function setDtCadastro($dtCadastro){
        $this->dtCadastro = $dtCadastro;
    }

    public function loadById($id){
        $sql = new Sql;

        $data = $sql->select("SELECT * FROM tb_usuarios WHERE :ID", array(
            ":ID"=>$id
        ));

        if (isset($data[0])){
            $row = $data[0];

            $this->setPkId($row["pkId"]);
            $this->setDsLogin($row["dsLogin"]);
            $this->setDsSenha($row["dsSenha"]);
            $this->setDtCadastro(new DateTime($row["dtCadastro"]));
        }
    }

    public function __toString(){
        return json_encode(array(
            "pkId"=>$this->getPkId(),
            "dsLogin"=>$this->getDsLogin(),
            "dsSenha"=>$this->getDsSenha(),
            "dtCadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
        ));
    }
}