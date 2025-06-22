<?php

include_once '../db/database.php';

class TransaksiModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addTransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi)
    {
        $this->updateStokBarangWhenAdd($kode_barang, $jenis_transaksi, $jumlah);

        $sql    = "INSERT INTO transaksi (kode_transaksi, kode_barang, kode_pemasok, jumlah, jenis_transaksi) VALUES (:kode_transaksi, :kode_barang, :kode_pemasok, :jumlah, :jenis_transaksi)";
        $params = [
            ":kode_transaksi"  => $kode_transaksi,
            ":kode_barang"     => $kode_barang,
            ":kode_pemasok"    => $kode_pemasok,
            ":jumlah"          => $jumlah,
            ":jenis_transaksi" => $jenis_transaksi,
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

    public function updateStokBarangWhenAdd($kode_barang, $jenis_transaksi, $jumlah)
    {
        if ($jenis_transaksi == 'masuk') {
            $operator = '+';
        } else {
            $operator = '-';
        }

        $sql    = "UPDATE barang SET stok = stok $operator :jumlah WHERE kode_barang = :kode_barang";
        $params = [
            ':jumlah'      => $jumlah,
            ':kode_barang' => $kode_barang,
        ];

        $result = $this->db->executeQuery($sql, $params);

        if ($result) {
            $response = [
                "success" => true,
                "message" => "Stok updated successfully",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Failed to update stok",
            ];
        }

        return json_encode($response);

    }

    public function updateStokBarangWhenUpdate($kode_barang, $kode_pemasok, $jumlah_baru, $jenis_transaksi_baru, $jumlah_lama, $jenis_transaksi_lama)
    {
        $sqlBarang  = "SELECT stok FROM barang WHERE kode_barang = :kode_barang";
        $dataBarang = $this->db->executeQuery($sqlBarang, [':kode_barang' => $kode_barang])->fetch(PDO::FETCH_ASSOC);
        $stok       = $dataBarang['stok'];

        $selisih_jumlah = $jumlah_lama - $jumlah_baru;
        $jumlah         = $selisih_jumlah;

        if ($jenis_transaksi_baru == 'masuk') {
            $jumlah = ($stok - $jumlah_lama) + $jumlah_baru;
        } else {
            $jumlah = ($stok + $jumlah_lama) - $jumlah_baru;
        }

        $sqlUpdateStok    = "UPDATE barang SET stok = :jumlah WHERE kode_barang = :kode_barang";
        $resultUpdateStok = $this->db->executeQuery($sqlUpdateStok, [
            ':jumlah'      => $jumlah,
            ':kode_barang' => $kode_barang,
        ]);

        if ($resultUpdateStok) {
            return json_encode([
                "success" => true,
                "message" => "Transaksi updated successfully",
            ]);
        } else {
            return json_encode([
                "success" => false,
                "message" => "Failed to update stok barang",
            ]);
        }

    }

    public function updateStokBarangWhenDelete($kode_barang, $jumlah, $jenis_transaksi)
    {
        if ($jenis_transaksi == 'keluar') {
            $operator = '+';
        } else {
            $operator = '-';
        }

        $sql    = "UPDATE barang SET stok = stok $operator :jumlah WHERE kode_barang = :kode_barang";
        $params = [
            ':jumlah'      => $jumlah,
            ':kode_barang' => $kode_barang,
        ];

        $result = $this->db->executeQuery($sql, $params);

        if ($result) {
            $response = [
                "success" => true,
                "message" => "Stok updated successfully",
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "Failed to update stok",
            ];
        }

        return json_encode($response);

    }

    public function getTransaksi($id)
    {
        $sql    = "SELECT * FROM transaksi WHERE id = :id";
        $params = [":id" => $id];

        return $this->db->executeQuery($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTransaksiLast30Days()
    {
        $sql = "SELECT DATE(tanggal) AS hari, COUNT(*) AS total_transaksi
                FROM transaksi
                WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
                GROUP BY hari
                ORDER BY hari ASC";

        return $this->db->executeQuery($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateTransaksi($id_transaksi, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah_baru, $jenis_transaksi_baru, $tanggal_baru, $jumlah_lama, $jenis_transaksi_lama)
    {
        $this->updateStokBarangWhenUpdate($kode_barang, $kode_pemasok, $jumlah_baru, $jenis_transaksi_baru, $jumlah_lama, $jenis_transaksi_lama);

        $sqlUpdateTransaksi = "UPDATE transaksi SET
        kode_transaksi = :kode_transaksi,
        kode_barang = :kode_barang,
        kode_pemasok = :kode_pemasok,
        jumlah = :jumlah_baru,
        jenis_transaksi = :jenis_transaksi_baru,
        tanggal = :tanggal_baru
        WHERE id = :id_transaksi";

        $params = [
            ':kode_transaksi'       => $kode_transaksi,
            ':kode_barang'          => $kode_barang,
            ':kode_pemasok'         => $kode_pemasok,
            ':jumlah_baru'          => $jumlah_baru,
            ':jenis_transaksi_baru' => $jenis_transaksi_baru,
            ':tanggal_baru'         => $tanggal_baru,
            ':id_transaksi'         => $id_transaksi,
        ];

        $result = $this->db->executeQuery($sqlUpdateTransaksi, $params);

        if ($result) {
            return json_encode([
                "success" => true,
                "message" => "Transaksi updated successfully",
            ]);
        } else {
            return json_encode([
                "success" => false,
                "message" => "Failed to update transaksi",
            ]);
        }
    }

    public function deleteTransaksi($id)
    {
        $barangData = $this->getTransaksi($id);
        $this->updateStokBarangWhenDelete($barangData[0]['kode_barang'], $barangData[0]['jumlah'], $barangData[0]['jenis_transaksi']);

        $sql    = "DELETE FROM transaksi WHERE id = :id";
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

    public function getTransaksiList()
    {
        $sql = 'SELECT * FROM transaksi limit 100';
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalTransaksi()
    {
        $sql = "SELECT COUNT(*) as total FROM transaksi";

        return $this->db->executeQuery($sql)->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getDataCombo()
    {
        $sql  = 'SELECT * FROM transaksi';
        $data = [];
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function isKodeTransaksiExists($kode_transaksi)
    {
        $query = "SELECT COUNT(*) as count FROM transaksi WHERE kode_transaksi = '$kode_transaksi'";

        $result = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }
}
