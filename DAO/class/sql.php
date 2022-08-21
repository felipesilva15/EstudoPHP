<?php

class Sql extends PDO{
    private $conn;

    // Se conecta ao BD
    public function __construct(){
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");
    }

    // Define todos os parâmetros da query
    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    // Define um parâmetros da query
    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    // Prepara uma query, executa e retorna o objeto de statements
    public function prepareQuery($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return ($stmt);
    }

    // Realiza uma select no BD e retorna o array do resultado
    public function select($rawQuery, $params = array()):array{
        $stmt = $this->prepareQuery($rawQuery, $params);

        return ($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
}