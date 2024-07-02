<?php
require_once 'Dao.php';

class Dette {
    private $id;
    private $montant;
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
        $req = "INSERT INTO dette (montant, vente_id) 
                VALUES (:montant, :vente_id)";
        $params = [
            'montant' => $this->montant,
            'vente_id' => $this->vente_id
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM dette";
        $pdoStatement = $this->db->execute($req);

        $listeDettes = [];
        while($dette = $this->db->fetchObject($pdoStatement, 'Dette')){
            $listeDettes[] = $dette;
        }
        return $listeDettes;
    }

    public function listeDettesClient(){
        $req = "SELECT
            d.id AS id_dette,
            CONCAT(c.prenom, ' ', c.nom) AS nom_client,
            c.telephone AS telephone_client,
            TO_CHAR(d.create_at, 'YYYY-MM-DD') AS date_dette,
            d.montant AS montant_dette
            FROM
                dette d
            JOIN
                vente v ON d.vente_id = v.id
            JOIN
                client c ON v.client_id = c.id
            WHERE d.montant > 0";

        $pdoStatement = $this->db->execute($req);

        $listeDettes = [];
        while($dette = $this->db->fetchOneArray($pdoStatement)){
            $listeDettes[] = $dette;
        }
        return $listeDettes;

    }

    public function getDetteById(){
        $req = "SELECT * FROM dette WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Dette');
    }

    public function delete(){
        $req = "DELETE FROM dette WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE dette SET montant = :montant, vente_id = :vente_id, update_at = :update_at 
                WHERE id = :id";
        $params = [
            'id' => $this->id,
            'montant' => $this->montant,
            'vente_id' => $this->vente_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Dette', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'montant' => $this->montant,
            'vente_id' => $this->vente_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->montant = $data['montant'];
        $this->vente_id = $data['vente_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
