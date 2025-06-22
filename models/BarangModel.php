<?php

include_once '../db/database.php';

class BarangModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addBarang($kode_barang, $nama, $deskripsi, $satuan, $stok)
    {
        $sql    = "INSERT INTO barang (kode_barang, nama, deskripsi, satuan, stok) VALUES (:kode_barang, :nama, :deskripsi, :satuan, :stok)";
        $params = [
            ":kode_barang" => $kode_barang,
            ":nama"        => $nama,
            ":deskripsi"   => $deskripsi,
            ":satuan"      => $satuan,
            ":stok"        => $stok,
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

    public function getBarang($id)
    {
        $sql    = "SELECT * FROM barang WHERE id = :id";
        $params = [":id" => $id];

        return $this->db->executeQuery($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalBarang()
    {
        $sql = "SELECT COUNT(*) as total FROM barang";

        return $this->db->executeQuery($sql)->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function updateBarang($id, $kode_barang, $nama, $deskripsi, $satuan, $stok, $created_at, $updated_at)
    {
        $sql    = "UPDATE barang SET kode_barang = :kode_barang, nama = :nama, deskripsi = :deskripsi, satuan = :satuan, stok = :stok, created_at = :created_at, updated_at = :updated_at WHERE id = :id";
        $params = [
            ":kode_barang" => $kode_barang,
            ":nama"        => $nama,
            ":deskripsi"   => $deskripsi,
            ":satuan"      => $satuan,
            ":stok"        => $stok,
            ":created_at"  => $created_at,
            ":updated_at"  => $updated_at,
            ":id"          => $id,
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

    public function updatefotoBarang($id, $foto)
    {
        $sql    = "UPDATE barang SET foto = :foto WHERE id = :id";
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

    public function deleteBarang($id)
    {
        $sql    = "DELETE FROM barang WHERE id = :id";
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

    public function getBarangList()
    {
        $sql = 'SELECT * FROM barang limit 100';
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataCombo()
    {
        $sql  = 'SELECT * FROM barang';
        $data = [];
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function isKodeBarangExists($kode_barang)
    {
        $query = "SELECT COUNT(*) as count FROM barang WHERE kode_barang = '$kode_barang'";

        $result = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }

}
