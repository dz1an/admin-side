<?php

require_once "database.class.php";
class UserManagement extends Database {
    //attributes

    public $id;
    public $username;
    public $userpassword;
    public $email;

    //Methods for CRUD
    function add(){
        $sql = "INSERT INTO wmsu_users(username, user_password, email) VALUES 
        (:username, :userpassword, :email);";

        $query=$this->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':userpassword', $this->userpassword);
        $query->bindParam(':email', $this->email);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE wmsu_users SET username=:username, user_password=:userpassword, email=:email WHERE id = :id;";
        
        $query=$this->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':userpassword', $this->userpassword);
        $query->bindParam(':email', $this->email);

        if($query->execute()){
            return true;
        }
        else {
            return false;
        }
    }

    function fetch($record_id){
        $sql = "SELECT * FROM wmsu_users WHERE id = :id ORDER BY username ASC;";
        $query=$this->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    //waiting ko pa paano ishow since nasa ibang table ang name.
    // function show(){
    //     $sql = "SELECT * FROM wmsu_users ORDER BY CONCAT('lastname',', ','firstname') ASC;";
    //     $query=$this->db->connect()->prepare($sql);
    //     if($query->execute()){
    //         $data = $query->fetchAll();
    //     }
    //     return $data;
    // }
    
    function delete($record_id){
        $sql = "DELETE FROM wmsu_users WHERE id = :id ;";
        $query=$this->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}