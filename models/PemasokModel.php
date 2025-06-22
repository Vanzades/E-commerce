<?php

include_once '../db/database.php';

class PemasokModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addPemasok($kode_pemasok, $nama, $alamat, $kontak, $foto)
    {
        $sql    = "INSERT INTO pemasok (kode_pemasok, nama, alamat, kontak, foto) VALUES (:kode_pemasok, :nama, :alamat, :kontak, :foto)";
        $params = [
            ":kode_pemasok" => $kode_pemasok,
            ":nama"         => $nama,
            ":alamat"       => $alamat,
            ":kontak"       => $kontak,
            ":foto"         => $foto,
        ];

        $result = $this->db->executeQuery($sql, $params);
        // Check if the insert was successful
        if ($result) {
            $response = [
                "success" => true,
                "message" => "Insert successful",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Insert failed",
            ];
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function getPemasok($id)
    {
        $sql    = "SELECT * FROM pemasok WHERE id = :id";
        $params = [":id" => $id];

        return $this->db->executeQuery($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalPemasok()
    {
        $sql = "SELECT COUNT(*) as total FROM pemasok";

        return $this->db->executeQuery($sql)->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function updatePemasok($id, $kode_pemasok, $nama, $alamat, $kontak)
    {
        $sql    = "UPDATE pemasok SET kode_pemasok = :kode_pemasok, nama = :nama, alamat = :alamat, kontak = :kontak  WHERE id = :id";
        $params = [
            ":kode_pemasok" => $kode_pemasok,
            ":nama"         => $nama,
            ":alamat"       => $alamat,
            ":kontak"       => $kontak,
            ":id"           => $id,
        ];

        // Execute the query
        $result = $this->db->executeQuery($sql, $params);

        // Check if the update was successful
        if ($result) {
            $response = [
                "success" => true,
                "message" => "Update successful",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Update failed",
            ];
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function updatefotoPemasok($id, $foto)
    {
        $sql    = "UPDATE pemasok SET foto = :foto WHERE id = :id";
        $params = [
            ":foto" => $foto,
            ":id"   => $id,
        ];

        // Execute the query
        $result = $this->db->executeQuery($sql, $params);

        // Check if the update was successful
        if ($result) {
            $response = [
                "success" => true,
                "message" => "Update successful",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Update failed",
            ];
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function deletePemasok($id)
    {
        $sql    = "DELETE FROM pemasok WHERE id = :id";
        $params = [":id" => $id];

        $result = $this->db->executeQuery($sql, $params);
        // Check if the delete was successful
        if ($result) {
            $response = [
                "success" => true,
                "message" => "Delete successful",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Delete failed",
            ];
        }

        // Return the response as JSON
        return json_encode($response);
    }

    public function getPemasokList()
    {
        $sql = 'SELECT * FROM pemasok limit 100';
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataCombo()
    {
        $sql  = 'SELECT * FROM pemasok';
        $data = [];
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function isKodePemasokExists($kode_pemasok)
    {
        $query = "SELECT COUNT(*) as count FROM pemasok WHERE kode_pemasok = '$kode_pemasok'";

        $result = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }
}
