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

    public function setData($data){
        $this->setPkId($data["pkId"]);
        $this->setDsLogin($data["dsLogin"]);
        $this->setDsSenha($data["dsSenha"]);
        $this->setDtCadastro(new DateTime($data["dtCadastro"]));
    }

    public function loadById($id){
        $sql = new Sql();

        $data = $sql->select("SELECT * FROM tb_usuarios WHERE pkId = :ID", array(
            ":ID"=>$id
        ));

        if (isset($data[0])){
            $row = $data[0];

            $this->setData($row);
        }
    }

    public static function getList():array{
        $sql = new Sql();

        return ($sql->select("SELECT * FROM tb_usuarios ORDER BY dsLogin"));
    }

    public static function searchByLogin($login):array{
        $sql = new Sql();

        return ($sql->select("SELECT * FROM tb_usuarios WHERE dsLogin LIKE :LOGIN ORDER BY dsLogin", array(
            ":LOGIN"=>"%$login%"
        )));
    }

    public function login($login, $senha){
        $sql = new Sql();

        $data = $sql->select("SELECT * FROM tb_usuarios WHERE dsLogin = :LOGIN AND dsSenha = :SENHA", array(
            ":LOGIN"=>$login,
            ":SENHA"=>$senha
        ));

        if (isset($data[0])){
            $row = $data[0];

            $this->setData($row);
        }else{
            throw new Exception("Login e/ou senha inválidos", 1);
        }
    }

    public function insert(){
        $sql = new Sql();

        $data = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            ":LOGIN"=>$this->getDsLogin(),
            ":SENHA"=>$this->getDsSenha()
        ));

        if (isset($data[0])){
            $row = $data[0];

            $this->setData($row);
        }else{
            throw new Exception("Erro ao salvar dados na base de dados, tente novamente.", 1);
            
        }
    }

    public function __construct($login = "", $senha = ""){
        $this->setDsLogin($login);
        $this->setDsSenha($senha);
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