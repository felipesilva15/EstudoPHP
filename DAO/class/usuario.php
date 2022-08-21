<?php

class Usuario {
    private $pkId, $dsLogin, $dsSenha, $dtCadastro;  

    // Define os métodos de gets e seteres
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

    // Realiza os sets nos atributos a partir de um array
    public function setData($data){
        $this->setPkId($data["pkId"]);
        $this->setDsLogin($data["dsLogin"]);
        $this->setDsSenha($data["dsSenha"]);
        $this->setDtCadastro(new DateTime($data["dtCadastro"]));
    }

    // Limpa os atributos da classe
    public function unsetData(){
        $this->setPkId(0);
        $this->setDsLogin("");
        $this->setDsSenha("");
        $this->setDtCadastro(new DateTime());
    }

    // Busca um usuário pelo ID
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

    // Busca todos os usuários da tabela
    public static function getList():array{
        $sql = new Sql();

        return ($sql->select("SELECT * FROM tb_usuarios ORDER BY dsLogin"));
    }

    // Busca um usuário pelo login
    public static function searchByLogin($login):array{
        $sql = new Sql();

        return ($sql->select("SELECT * FROM tb_usuarios WHERE dsLogin LIKE :LOGIN ORDER BY dsLogin", array(
            ":LOGIN"=>"%$login%"
        )));
    }

    // Realiza um login e seta o usuário nos atributos da classe
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

    // Insere um usuário no BD
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

    // Altera um usuário no BD
    public function update($login, $senha){
        $this->setDsLogin($login);
        $this->setDsSenha($senha);

        $sql = new Sql();

        $sql->prepareQuery("UPDATE tb_usuarios SET dsLogin = :LOGIN, dsSenha = :SENHA WHERE pkID = :ID", array(
            ":LOGIN"=>$this->getDsLogin(),
            ":SENHA"=>$this->getDsSenha(),
            ":ID"=>$this->getPkId(),
        ));
    }

    // Deleta um usuário do BD
    public function delete(){
        $sql = new Sql();

        $sql->select("DELETE FROM tb_usuarios WHERE pkId = :ID", array(
            ":ID"=>$this->getPkId()
        ));

        $this->unsetData();
    }

    // Define os atributos da classe ao cria-la 
    public function __construct($login = "", $senha = ""){
        $this->setDsLogin($login);
        $this->setDsSenha($senha);
    }

    // Define um json de retorno ao ser chamado um echo do objeto da classe
    public function __toString(){
        return json_encode(array(
            "pkId"=>$this->getPkId(),
            "dsLogin"=>$this->getDsLogin(),
            "dsSenha"=>$this->getDsSenha(),
            "dtCadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
        ));
    }
}