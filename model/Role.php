<?php
require_once 'Dao.php';

class Role {
    private $id;
    private $libelle;
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
        $req = "INSERT INTO role (libelle) 
                VALUES (:libelle)";
        $params = [
            'libelle' => $this->libelle
        ];

        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function liste(){
        $req = "SELECT * FROM role";
        $pdoStatement = $this->db->execute($req);

        $listeRoles = [];
        while($role = $this->db->fetchObject($pdoStatement, 'Role')){
            $listeRoles[] = $role;
        }
        return $listeRoles;
    }

    public function getRoleById(){
        $req = "SELECT * FROM role WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->fetchObject($pdoStatement, 'Role');
    }

    public function delete(){
        $req = "DELETE FROM role WHERE id = :id";
        $params = ['id' => $this->id];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function update(){
        $req = "UPDATE role SET libelle = :libelle, update_at = :update_at WHERE id = :id";
        $params = [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'update_at' => date('Y-m-d H:i:s')
        ];
        $pdoStatement = $this->db->execute($req, $params);
        return $this->db->nbLigne($pdoStatement);
    }

    public function hydrate($tab){
        foreach($tab as $key => $value){
            if(property_exists('Role', $key)){
                $this->$key = $value;
            }
        }
    }

    public function __serialize() {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at
        ];
    }

    public function __unserialize($data)
    {
        $this->id = $data['id'];
        $this->libelle = $data['libelle'];
        $this->create_at = $data['create_at'];
        $this->update_at = $data['update_at'];
    }
}