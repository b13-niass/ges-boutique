<?php
require_once 'Dao.php';

class Paiement {
    private $id;
    private $montant;
    private $mode;
    private $vente_id;
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
        $req = "INSERT INTO paiement (montant, mode, vente_id) 
                VALUES (:montant, :mode, :vente_id)";
        $params = [
            'montant' => $this->montant,
            'mode' => $this->mode,
            'vente_id' => $this->vente_id
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM paiement";
        $pdoStatement = $this->db->execute($req);

        $listePaiements = [];
        while($paiement = $this->db->fetchObject($pdoStatement, 'Paiement')){
            $listePaiements[] = $paiement;
        }
        return $listePaiements;
    }

    public function getPaiementById(){
        $req = "SELECT * FROM paiement WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Paiement');
    }

    public function delete(){
        $req = "DELETE FROM paiement WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE paiement SET montant = :montant, mode = :mode, 
                vente_id = :vente_id, update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'montant' => $this->montant,
            'mode' => $this->mode,
            'vente_id' => $this->vente_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Paiement', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'montant' => $this->montant,
            'mode' => $this->mode,
            'vente_id' => $this->vente_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->montant = $data['montant'];
        $this->mode = $data['mode'];
        $this->vente_id = $data['vente_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
