<?php

class Dao {
    private $pdo;
    public function __construct(){
        try{
            $this->pdo = new PDO("pgsql:host=localhost;port=5432;dbname=testphp", "postgres", "",
                [PDO::ATTR_PERSISTENT => true]);
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    // $sql = "INSERT INTO client (nom, email, password) VALUES (:nom, :email, :password)";
    // $param = ['nom' => 'test', 'email' => 'test@test.com', 'password' => 'password'];
    public function execute($req, $params = null){
        $pdoStatement = $this->pdo->prepare($req);
        if($params != null){
            foreach($params as $key => $value){
                if ($key === 'photo') {
                    $pdoStatement->bindValue(":$key", $value, PDO::PARAM_LOB);
                } else {
                    $pdoStatement->bindValue(":$key", $value);
                }
            }
        }
        $pdoStatement->execute();
        return $pdoStatement;
    }

    public function beginTransaction() {
        return $this->pdo->beginTransaction();
    }

    public function commit() {
        return $this->pdo->commit();
    }

    public function rollback() {
        return $this->pdo->rollBack();
    }

    public function fetchAll($pdoStatement){
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }
    public function fetch($pdoStatement){
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }
    public function fetchObject($pdoStatement, $className){
        return $pdoStatement->fetchObject($className);
    }

    public function fetchAllArray($pdoStatement){
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function fetchOneArray($pdoStatement){
        return $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }

    public function nbLigne($pdoStatement){
        return $pdoStatement->rowCount();
    }
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}