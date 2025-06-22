<?php

include_once('../db/database.php');

class UsersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addUsers($nama, $email, $sandi, $level)
    {
        $sql = "INSERT INTO users (nama, email, sandi, level) VALUES (:nama, :email, :sandi, :level)";
        $params = array(
            ":nama" => $nama,
            ":email" => $email,
            ":sandi" => $sandi,
            ":level" => $level
        );

        $result = $this->db->executeQuery($sql, $params);
        // Check if the insert was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Insert successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Insert failed"
            );
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function getUsers($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $params = array(":id" => $id);

        return $this->db->executeQuery($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUsers($id, $nama, $email, $sandi, $level)
    {
        $sql = "UPDATE users SET nama = :nama, email = :email, sandi = :sandi, level = :level WHERE id = :id";
        $params = array(
            ":nama" => $nama,
            ":email" => $email,
            ":sandi" => $sandi,
            ":level" => $level,
            ":id" => $id
        );

        // Execute the query
        $result = $this->db->executeQuery($sql, $params);

        // Check if the update was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Update successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Update failed"
            );
        }

        // Return the response as JSON
        return json_encode($response);
    }


    public function deleteUsers($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $params = array(":id" => $id);

        $result = $this->db->executeQuery($sql, $params);
        // Check if the delete was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Delete successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Delete failed"
            );
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function getUsersList()
    {
        $sql = 'SELECT * FROM users limit 100';
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataCombo()
    {
        $sql = 'SELECT * FROM users';
        $data = array();
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
