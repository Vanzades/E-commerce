<?php

include_once('db/database.php');

class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Mengubah login_validation untuk menggunakan nama
    public function login_validation($email, $sandi)
    {

        // Mengubah pencarian dari email ke nama
        $sql = "SELECT id, email, nama, sandi, level FROM users WHERE email = :email";
        $params = array(":email" => $email);
        $stmt = $this->db->executeQuery($sql, $params);

        if ($stmt !== false && !empty($stmt)) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['sandi'];
            $nama = $row['nama'];
            $level = $row['level'];

            if (password_verify($sandi, $hashed_password)) { // Verify password
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email;
                $_SESSION['level'] = $level;

                $response = array(
                    "success" => true,
                    "message" => "Login successful"
                );
            } else {
                $response = array(
                    "success" => false,
                    "message" => "Invalid password"
                );
            }
        } else {
            $response = array(
                "success" => false,
                "message" => "User not found"
            );
        }

        return json_encode($response);
    }

    // Mengubah addUsers untuk menggunakan nama sebagai parameter utama
    public function addUsers($nama, $email, $sandi)
    {
        // Pastikan nama adalah unik, jika tidak, Anda harus menambahkan validasi untuk memeriksa duplikat nama
        $sql = "INSERT INTO users (nama, email, sandi) VALUES (:nama, :email,:sandi)";
        $pwd = password_hash($sandi, PASSWORD_BCRYPT);
        $params = array(
            ":nama" => $nama,
            ":email" => $email,
            ":sandi" => $pwd,
        );

        $result = $this->db->executeQuery($sql, $params);

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

        return json_encode($response);
    }
}
