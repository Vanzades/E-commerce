<?php
include_once '../models/TransaksiModel.php';

class TransaksiController
{
    private $model;

    public function __construct()
    {
        $this->model = new TransaksiModel();
    }

    public function addTransaksi($kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi)
    {
        $kode_transaksi = $this->generateRandomKodeTransaksi();

        return $this->model->addTransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi);
    }

    private function generateRandomKodeTransaksi()
    {
        do {

            $randomNumber   = rand(1, 9999);
            $kode_transaksi = 'TRX-' . str_pad($randomNumber, 4, '0', STR_PAD_LEFT);

            $exists = $this->model->isKodeTransaksiExists($kode_transaksi);
        } while ($exists);

        return $kode_transaksi;
    }

    public function getTransaksi($id)
    {
        return $this->model->getTransaksi($id);
    }

    public function Show($id)
    {
        $rows = $this->model->getTransaksi($id);
        foreach ($rows as $row) {
            $val = $row['nama'];
        }
        return $val;
    }

    public function updateTransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $jumlah_lama, $jenis_transaksi_lama)
    {
        return $this->model->updateTransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $jumlah_lama, $jenis_transaksi_lama);
    }

    public function deleteTransaksi($id)
    {
        return $this->model->deleteTransaksi($id);
    }

    public function getTransaksiList()
    {
        return $this->model->getTransaksiList();
    }

    public function getTransaksiLast30Days()
    {
        return $this->model->getTransaksiLast30Days();
    }

    public function getTotalTransaksi()
    {
        return $this->model->getTotalTransaksi();
    }

    public function getDataCombo()
    {
        return $this->model->getDataCombo();
    }
}
