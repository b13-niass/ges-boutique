<?php
require_once 'Dao.php';

class ArticleUnite {
    private $id;
    private $article_id;
    private $unite_id;
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
        $req = "INSERT INTO article_unite (article_id, unite_id) 
                VALUES (:article_id, :unite_id)";
        $params = [
            'article_id' => $this->article_id,
            'unite_id' => $this->unite_id
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM article_unite";
        $pdoStatement = $this->db->execute($req);

        $listeArticleUnites = [];
        while($articleUnite = $this->db->fetchObject($pdoStatement, 'ArticleUnite')){
            $listeArticleUnites[] = $articleUnite;
        }
        return $listeArticleUnites;
    }

    public function listeOfArray(){
        $req = "SELECT * FROM article_unite au JOIN unite u ON au.unite_id = u.id";
        $pdoStatement = $this->db->execute($req);

        $listeArticleUnites = [];
        while($articleUnite = $this->db->fetchOneArray($pdoStatement)){
            $listeArticleUnites[] = $articleUnite;
        }
        return $listeArticleUnites;
    }

    public function getArticleUniteById(){
        $req = "SELECT * FROM article_unite WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'ArticleUnite');
    }

    public function delete(){
        $req = "DELETE FROM article_unite WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE article_unite SET article_id = :article_id, unite_id = :unite_id, 
                update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'article_id' => $this->article_id,
            'unite_id' => $this->unite_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('ArticleUnite', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'article_id' => $this->article_id,
            'unite_id' => $this->unite_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->article_id = $data['article_id'];
        $this->unite_id = $data['unite_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
