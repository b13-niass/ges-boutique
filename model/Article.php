<?php
require_once 'Dao.php';

class Article {
    private $id;
    private $libelle;
    private $description;
    private $categorie_id;
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
        $req = "INSERT INTO article (libelle, description, categorie_id) 
                VALUES (:libelle, :description, :categorie_id)";
        $params = [
            'libelle' => $this->libelle,
            'description' => $this->description,
            'categorie_id' => $this->categorie_id
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM article";
        $pdoStatement = $this->db->execute($req);

        $listeArticles = [];
        while($article = $this->db->fetchObject($pdoStatement, 'Article')){
            $listeArticles[] = $article;
        }

        return $listeArticles;
    }

    public function listeOfArray(){
        $req = "SELECT * FROM article";
        $pdoStatement = $this->db->execute($req);

        $listeArticles = [];
        while($article = $this->db->fetchOneArray($pdoStatement)){
            $listeArticles[] = $article;
        }

        return $listeArticles;
    }

    public function getArticleById(){
        $req = "SELECT * FROM article WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Article');
    }

    public function delete(){
        $req = "DELETE FROM article WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE article SET libelle = :libelle, description = :description, categorie_id = :categorie_id, 
                update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'description' => $this->description,
            'categorie_id' => $this->categorie_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Article', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'description' => $this->description,
            'categorie_id' => $this->categorie_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->libelle = $data['libelle'];
        $this->description = $data['description'];
        $this->categorie_id = $data['categorie_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
