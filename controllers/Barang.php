<?php
include_once '../models/BarangModel.php';

class BarangController
{
    private $model;

    public function __construct()
    {
        $this->model = new BarangModel();
    }

    public function addBarang($nama, $deskripsi, $satuan, $stok)
    {
        $kode_barang = $this->generateRandomKodeBarang();
        return $this->model->addBarang($kode_barang, $nama, $deskripsi, $satuan, $stok);
    }

    private function generateRandomKodeBarang()
    {
        do {

            $randomNumber = rand(1, 9999);
            $kode_barang  = 'BRG-' . str_pad($randomNumber, 4, '0', STR_PAD_LEFT);

            $exists = $this->model->isKodeBarangExists($kode_barang);
        } while ($exists);

        return $kode_barang;
    }

    public function getBarang($id)
    {
        return $this->model->getBarang($id);
    }

    public function Show($id)
    {
        $rows = $this->model->getBarang($id);
        foreach ($rows as $row) {
            $val = $row['nama'];
        }
        return $val;
    }

    public function updateBarang($id, $kode_barang, $nama, $deskripsi, $satuan, $stok, $created_at, $updated_at)
    {
        return $this->model->updateBarang($id, $kode_barang, $nama, $deskripsi, $satuan, $stok, $created_at, $updated_at);
    }

    public function updatefotoBarang($id, $foto)
    {
        return $this->model->updatefotoBarang($id, $foto);
    }

    public function deleteBarang($id)
    {
        return $this->model->deleteBarang($id);
    }

    public function getBarangList()
    {
        return $this->model->getBarangList();
    }

    public function getTotalBarang()
    {
        return $this->model->getTotalBarang();
    }

    public function getDataCombo()
    {
        return $this->model->getDataCombo();
    }
}
