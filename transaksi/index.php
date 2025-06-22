<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj   = new TransaksiController();
    $rows  = $obj->gettransaksiList();
    $theme = setTheme();
    getHeader($theme);
?>

<div class="header icon-and-heading">
    <i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
    <h2><strong>Transaksi</strong> <small>List All Data</small> </h2>
    </div>
    <hr style="margin-bottom:-2px;"/>
        <div class="my-3 gap-3 d-flex flex-row justify-content-end">
            <a style="margin:10px 0px;" class="btn btn-large btn-outline-success" href="add.php"><i class="fa fa-plus"></i>Add Data</a>
            <a style="margin:10px 0px;" class="btn btn-large btn-outline-secondary" href="cetakfinal.php"><i class="fa fa-print"></i> Print Data</a>
        </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Kode Transaksi</th>
                <th>Kode Barang</th>
                <th>Kode Pemasok</th>
                <th>Jumlah</th>
                <th>Jenis Transaksi</th>
                <th>Tanggal</th>
                <th width="140">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) {?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["kode_transaksi"]; ?></td>
            <td><?php echo $row["kode_barang"]; ?></td>
            <td><?php echo $row["kode_pemasok"]; ?></td>
            <td><?php echo $row["jumlah"]; ?></td>
            <td><?php echo $row["jenis_transaksi"]; ?></td>
            <td><?php echo $row["tanggal"]; ?></td>
            <td class="text-center" width="200">
                <a class="btn btn-outline-info btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">
                    <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-outline-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php
    getFooter($theme, "");
?>
