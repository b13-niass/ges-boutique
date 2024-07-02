<?php
require_once 'Dao.php';

class Client {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $photo;
    private $adresse;
    private $telephone;
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
        $req = "INSERT INTO client (nom, prenom, email, password, adresse, telephone,photo) 
                VALUES (:nom, :prenom, :email, :password, :adresse, :telephone,:photo)";
        $params = [
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => $this->password,
            'adresse' => $this->adresse,
            'telephone' => $this->telephone,
            'photo' => $this->photo,
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM client";
        $pdoStatement = $this->db->execute($req);

        $listeClients = [];
        while($client = $this->db->fetchObject($pdoStatement, 'Client')){
            $listeClients[] = $client;
        }
        return $listeClients;
    }

    public function listeOfArray(){
        $req = "SELECT * FROM client";
        $pdoStatement = $this->db->execute($req);

        $listeClients = [];
        while($client = $this->db->fetchOneArray($pdoStatement)){
            unset($client['password']);
            $listeClients[] = $client;
        }
        return $listeClients;
    }

    public function getClientById(){
        $req = "SELECT * FROM client WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Client');
    }

    public function delete(){
        $req = "DELETE FROM client WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE client SET nom = :nom, prenom = :prenom, email = :email, 
                password = :password, adresse = :adresse, telephone = :telephone,
                update_at = :update_at,
                photo = :photo
                WHERE id = :id";
        $params = [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => $this->password,
            'adresse' => $this->adresse,
            'telephone' => $this->telephone,
            'photo' => $this->photo,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function login(){
        $req = "SELECT * FROM client WHERE email = :email AND password = :password";
        $params = ['email' => $this->email, 'password' => $this->password];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Client');
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Client', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => $this->password,
            'adresse' => $this->adresse,
            'telephone' => $this->telephone,
            'photo' => $this->photo,
            'create_at' => $this->created_at,
            'update_at' => $this->update_at,
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->adresse = $data['adresse'];
        $this->telephone = $data['telephone'];
        $this->photo = $data['photo'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}
