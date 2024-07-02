<?php
require_once 'Dao.php';

class DetailVente {
    private $id;
    private $vente_id;
    private $article_id;
    private $quantite;
    private $prixVente;
    private $unite;
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
        $req = "INSERT INTO detail_vente (vente_id, article_id, quantite, prixVente, unite) 
                VALUES (:vente_id, :article_id, :quantite, :prixVente, :unite)";
        $params = [
            'vente_id' => $this->vente_id,
            'article_id' => $this->article_id,
            'quantite' => $this->quantite,
            'prixVente' => $this->prixVente,
            'unite' => $this->unite
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM detail_vente";
        $pdoStatement = $this->db->execute($req);

        $listeDetailVentes = [];
        while($detailVente = $this->db->fetchObject($pdoStatement, 'DetailVente')){
            $listeDetailVentes[] = $detailVente;
        }
        return $listeDetailVentes;
    }

    public function getDetailVenteById(){
        $req = "SELECT * FROM detail_vente WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'DetailVente');
    }

    public function delete(){
        $req = "DELETE FROM detail_vente WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE detail_vente SET vente_id = :vente_id, article_id = :article_id, quantite = :quantite, 
                prixVente = :prixVente, unite = :unite, update_at = :update_at
                WHERE id = :id";
        $params = [
            'id' => $this->id,
            'vente_id' => $this->vente_id,
            'article_id' => $this->article_id,
            'quantite' => $this->quantite,
            'prixVente' => $this->prixVente,
            'unite' => $this->unite,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('DetailVente', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'vente_id' => $this->vente_id,
            'article_id' => $this->article_id,
            'quantite' => $this->quantite,
            'prixVente' => $this->prixVente,
            'unite' => $this->unite,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->vente_id = $data['vente_id'];
        $this->article_id = $data['article_id'];
        $this->quantite = $data['quantite'];
        $this->prixVente = $data['prixVente'];
        $this->unite = $data['unite'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
