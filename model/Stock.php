<?php
require_once 'Dao.php';

class Stock {
    private $id;
    private $quantitePieces;
    private $quantiteBoites;
    private $prixBoite;
    private $prixUnitaire;
    private $pieceParBoite;
    private $article_id;
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
        $req = "INSERT INTO stock (quantite_pieces, quantite_boites, prix_boite, prix_unitaire,piece_par_boite, article_id) 
                VALUES (:quantite_pieces, :quantite_boites, :prix_boite, :prix_unitaire,:piece_par_boite, :article_id)";
        $params = [
            'quantite_pieces' => $this->quantitePieces,
            'quantite_boites' => $this->quantiteBoites,
            'prix_boite' => $this->prixBoite,
            'prix_unitaire' => $this->prixUnitaire,
            'piece_par_boite' => $this->pieceParBoite,
            'article_id' => $this->article_id
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM stock";
        $pdoStatement = $this->db->execute($req);

        $listeStocks = [];
        while($stock = $this->db->fetchObject($pdoStatement, 'Stock')){
            $listeStocks[] = $stock;
        }
        return $listeStocks;
    }

    public function listeOfArray(){
        $req = "SELECT * FROM stock";
        $pdoStatement = $this->db->execute($req);

        $listeStocks = [];
        while($stock = $this->db->fetchOneArray($pdoStatement)){
            $listeStocks[] = $stock;
        }
        return $listeStocks;
    }

    public function getStockById(){
        $req = "SELECT * FROM stock WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Stock');
    }

    public function delete(){
        $req = "DELETE FROM stock WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE stock SET 
                quantite_pieces = :quantite_pieces,
                quantite_boites = :quantite_boites,
                prix_boite = :prix_boite,
                prix_unitaire = :prix_unitaire,
                piece_par_boite = :piece_par_boite,
                article_id = :article_id,
                update_at = :update_at
                WHERE id = :id";
        $params = [
            'id' => $this->id,
            'quantite_pieces' => $this->quantitePieces,
            'quantite_boites' => $this->quantiteBoites,
            'prix_boite' => $this->prixBoite,
            'prix_unitaire' => $this->prixUnitaire,
            'piece_par_boite' => $this->pieceParBoite,
            'article_id' => $this->article_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Stock', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'quantite_pieces' => $this->quantitePieces,
            'quantite_boites' => $this->quantiteBoites,
            'prix_boite' => $this->prixBoite,
            'prix_unitaire' => $this->prixUnitaire,
            'piece_par_boite' => $this->pieceParBoite,
            'article_id' => $this->article_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->quantitePieces = $data['quantite_pieces'];
        $this->quantiteBoites = $data['quantite_boites'];
        $this->prixBoite = $data['prix_boite'];
        $this->prixUnitaire = $data['prix_unitaire'];
        $this->pieceParBoite = $data['piece_par_boite'];
        $this->article_id = $data['article_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
?>
