<?php
include_once '../models/PemasokModel.php';

class PemasokController
{
    private $model;

    public function __construct()
    {
        $this->model = new PemasokModel();
    }

    public function addPemasok($nama, $alamat, $kontak, $foto)
    {
        $kode_pemasok = $this->generateRandomKodePemasok();
        return $this->model->addPemasok($kode_pemasok, $nama, $alamat, $kontak, $foto);
    }

    private function generateRandomKodePemasok()
    {
        do {

            $randomNumber = rand(1, 9999);
            $kode_pemasok = 'SPL-' . str_pad($randomNumber, 4, '0', STR_PAD_LEFT);

            $exists = $this->model->isKodePemasokExists($kode_pemasok);
        } while ($exists);

        return $kode_pemasok;
    }

    public function getPemasok($id)
    {
        return $this->model->getPemasok($id);
    }

    public function getTotalPemasok()
    {
        return $this->model->getTotalPemasok();
    }

    public function Show($id)
    {
        $rows = $this->model->getPemasok($id);
        foreach ($rows as $row) {
            $val = $row['nama'];
        }
        return $val;
    }

    public function updatePemasok($id, $kode_pemasok, $nama, $alamat, $kontak)
    {
        return $this->model->updatePemasok($id, $kode_pemasok, $nama, $alamat, $kontak);
    }

    public function updatefotoPemasok($id, $foto)
    {
        return $this->model->updatefotoPemasok($id, $foto);
    }

    public function deletePemasok($id)
    {
        return $this->model->deletePemasok($id);
    }

    public function getPemasokList()
    {
        return $this->model->getPemasokList();
    }

    public function getDataCombo()
    {
        return $this->model->getDataCombo();
    }
}
