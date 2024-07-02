<?php
require_once 'Dao.php';

class Vente {
    private $id;
    private $client_id;
    private $utilisateur_id;
    private $montant;
    private $etat;
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

    public function add() {
        try {
            // Begin transaction
            $this->db->beginTransaction();

            // Insert into vente table
            $req = "INSERT INTO vente (client_id, utilisateur_id, montant, etat) 
                    VALUES (:client_id, :utilisateur_id, :montant, :etat)";
            $params = [
                'client_id' => $this->client_id,
                'utilisateur_id' => $this->utilisateur_id,
                'montant' => $this->montant,
                'etat' => $this->etat
            ];
            $stmt = $this->db->execute($req, $params);
            $vente_id = $this->db->lastInsertId();

            // Insert into detail_vente table and update stock
            foreach ($this->details_vente as $detail) {
                $req = "INSERT INTO detail_vente (vente_id, article_id, quantite, prixVente, unite) 
                        VALUES (:vente_id, :article_id, :quantite, :prixVente, :unite)";
                $params = [
                    'vente_id' => $vente_id,
                    'article_id' => $detail['article_id'],
                    'quantite' => $detail['quantite'],
                    'prixVente' => $detail['prixVente'],
                    'unite' => $detail['unite']
                ];
                $this->db->execute($req, $params);

                // Update stock
                if ($detail['unite'] == 'Box') {
                    $req = "UPDATE stock 
                            SET quantite_boites = quantite_boites - :quantite 
                            WHERE article_id = :article_id AND quantite_boites >= :quantite";
                } else {
                    $req = "UPDATE stock 
                            SET quantite_pieces = quantite_pieces - :quantite 
                            WHERE article_id = :article_id AND quantite_pieces >= :quantite";
                }
                $params = [
                    'quantite' => $detail['quantite'],
                    'article_id' => $detail['article_id']
                ];
                $stmt = $this->db->execute($req, $params);

                // Check if stock update was successful
                if ($this->db->rowCount($stmt) == 0) {
                    $this->db->rollback();
                    throw new Exception("Stock insuffisant pour l'article ID " . $detail['article_id']);
                }
            }

            // Insert into dette table
            $req = "INSERT INTO dette (montant, vente_id) 
                    VALUES (:montant, :vente_id)";
            $params = [
                'montant' => $this->dette,
                'vente_id' => $vente_id
            ];
            $this->db->execute($req, $params);

            // Commit transaction
            $this->db->commit();

            return true;

        } catch (Exception $e) {
            // Rollback transaction on error
            $this->db->rollback();
            throw $e;
        }
    }

    public function liste(){
        $req = "SELECT * FROM vente";
        $pdoStatement = $this->db->execute($req);

        $listeVentes = [];
        while($vente = $this->db->fetchObject($pdoStatement, 'Vente')){
            $listeVentes[] = $vente;
        }
        return $listeVentes;
    }

    public function getVenteById(){
        $req = "SELECT * FROM vente WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Vente');
    }

    public function delete(){
        $req = "DELETE FROM vente WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE vente SET 
                client_id = :client_id, 
                utilisateur_id = :utilisateur_id, 
                montant = :montant,
                etat = :etat,
                update_at = :update_at
                WHERE id = :id";
        $params = [
            'id' => $this->id,
            'client_id' => $this->client_id,
            'utilisateur_id' => $this->utilisateur_id,
            'montant' => $this->montant,
            'etat' => $this->etat,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Vente', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'client_id' => $this->client_id,
            'utilisateur_id' => $this->utilisateur_id,
            'montant' => $this->montant,
            'etat' => $this->etat,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->client_id = $data['client_id'];
        $this->utilisateur_id = $data['utilisateur_id'];
        $this->montant = $data['montant'];
        $this->etat = $data['etat'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
