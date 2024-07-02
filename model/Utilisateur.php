<?php
require_once 'Dao.php';

class Utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $adresse;
    private $telephone;
    private $photo;
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
        $req = "INSERT INTO utilisateur (nom, prenom, email, password, adresse, telephone,photo) 
                VALUES (:nom, :prenom, :email, :password, :adresse, :telephone, :photo)";
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
        $req = "SELECT * FROM utilisateur";
        $pdoStatement = $this->db->execute($req);

        $listeUtilisateurs = [];
        while($utilisateur = $this->db->fetchObject($pdoStatement, 'Utilisateur')){
            $listeUtilisateurs[] = $utilisateur;
        }
        return $listeUtilisateurs;
    }

    public function getUtilisateurById(){
        $req = "SELECT * FROM utilisateur WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Utilisateur');
    }

    public function delete(){
        $req = "DELETE FROM utilisateur WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE utilisateur SET 
                nom = :nom, 
                prenom = :prenom, 
                email = :email, 
                password = :password, 
                adresse = :adresse, 
                telephone = :telephone, 
                photo = :photo, 
                update_at = :update_at 
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

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Utilisateur', $key)){
                $this->$key = $value;
            }
        }
    }

    public function login(){
        $req = "SELECT * FROM utilisateur WHERE email = :email AND password = :password";
        $params = ['email' => $this->email, 'password' => $this->password];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Utilisateur');
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
            'create_at' => $this->create_at,
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
