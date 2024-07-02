<?php
require_once 'Dao.php';

class Categorie {
    private $id;
    private $libelle;
    private $create_at;
    private $update_at;
    private $db;

    public function __construct(){
        $this->db = new Dao();
    }

    public function __destruct() {
        $this->db = null;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
        return $this;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function add(){
        $req = "INSERT INTO categorie (libelle) 
                VALUES (:libelle)";
        $params = [
            'libelle' => $this->libelle
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM categorie";
        $pdoStatement = $this->db->execute($req);

        $listeCategories = [];
        while($categorie = $this->db->fetchObject($pdoStatement, 'Categorie')){
            $listeCategories[] = $categorie;
        }
        return $listeCategories;
    }

    public function listeOfArray(){
        $req = "SELECT * FROM categorie";
        $pdoStatement = $this->db->execute($req);

        $listeCategories = [];
        while($categorie = $this->db->fetchOneArray($pdoStatement)){
            $listeCategories[] = $categorie;
        }
        return $listeCategories;
    }

    public function getCategorieById(){
        $req = "SELECT * FROM categorie WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Categorie');
    }

    public function delete(){
        $req = "DELETE FROM categorie WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE categorie SET libelle = :libelle, update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Categorie', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->libelle = $data['libelle'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
