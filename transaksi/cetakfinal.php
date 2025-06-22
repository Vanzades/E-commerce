<?php
include "../controllers/Transaksi.php";
include "../lib/functions.php";

$obj  = new TransaksiController();
$rows = $obj->gettransaksiList();

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Barang Masuk & Keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .footer {
            margin-top: 20px;
            font-size: 10px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="title">LAPORAN BARANG MASUK & KELUAR</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>KODE TRANSAKSI</th>
            <th>KODE BARANG</th>
            <th>JUMLAH</th>
            <th>JENIS TRANSAKSI</th>
            <th>TANGGAL</th>
        </tr>
    </thead>
    <tbody>';

foreach ($rows as $row) {
    $html .= '
        <tr>
            <td>' . htmlspecialchars($row["id"]) . '</td>
            <td>' . htmlspecialchars($row["kode_transaksi"]) . '</td>
            <td>' . htmlspecialchars($row["kode_barang"]) . '</td>
            <td>' . htmlspecialchars($row["jumlah"]) . '</td>
            <td>' . htmlspecialchars($row["jenis_transaksi"]) . '</td>
            <td>' . htmlspecialchars($row["tanggal"]) . '</td>
        </tr>';
}

$html .= '
    </tbody>
</table>

<div class="footer">
    Dicetak pada: ' . date("d-m-Y H:i:s") . '
</div>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('Laporan_Transaksi.pdf', 'D');
