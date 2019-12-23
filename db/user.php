<?php
include "db.php";

class user extends db{
    public $db;

    public  function userAll(){
        $this->db = new db;
        $conn = $this->db->conn;
        $SQL = "SELECT * FROM users";
        $query = mysqli_query($conn, $SQL);
        return $query;
    }

    public  function userSingle($id){
        $this->db = new db;
        $conn = $this->db->conn;
        $SQL = "SELECT * FROM users where id = '$id'";
        $query = mysqli_query($conn, $SQL);
        return $query;
    }

    public  function userSave($id, $username, $password, $name, $surname, $email){
        $this->db = new db;
        $conn = $this->db->conn;
        $SQL = "INSERT INTO users(id, username, password, name, surname, email) values ('$id','$username', '$password', '$name', '$surname', '$email')";
        $query = mysqli_query($conn, $SQL);
        return $query;
    }

    public  function userUpdate($id, $username, $password, $name, $surname, $email){
        $this->db = new db;
        $conn = $this->db->conn;
        $SQL = "UPDATE users SET username = '$username', password = '$password', name = '$name', surname = '$surname', email = '$email' WHERE id = '$id'";
        $query = mysqli_query($conn, $SQL);
        return $query;
    }
}
?>