<?php
require_once 'Dao.php';

class RoleUtilisateur {
    private $id;
    private $role_id;
    private $utilisateur_id;
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
        $req = "INSERT INTO role_utilisateur (role_id, utilisateur_id) 
                VALUES (:role_id, :utilisateur_id)";
        $params = [
            'role_id' => $this->role_id,
            'utilisateur_id' => $this->utilisateur_id
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM role_utilisateur";
        $pdoStatement = $this->db->execute($req);

        $listeRoleUtilisateurs = [];
        while($roleUtilisateur = $this->db->fetchObject($pdoStatement, 'RoleUtilisateur')){
            $listeRoleUtilisateurs[] = $roleUtilisateur;
        }
        return $listeRoleUtilisateurs;
    }

    public function getRoleUtilisateurById(){
        $req = "SELECT * FROM role_utilisateur WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'RoleUtilisateur');
    }

    public function delete(){
        $req = "DELETE FROM role_utilisateur WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE role_utilisateur SET role_id = :role_id, utilisateur_id = :utilisateur_id,
                update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'role_id' => $this->role_id,
            'utilisateur_id' => $this->utilisateur_id,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('RoleUtilisateur', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'role_id' => $this->role_id,
            'utilisateur_id' => $this->utilisateur_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->role_id = $data['role_id'];
        $this->utilisateur_id = $data['utilisateur_id'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}