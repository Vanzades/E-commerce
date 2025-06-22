<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj = new TransaksiController();
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $msg = null;
    if (isset($_POST["submitted"]) == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $id                   = $_POST['id'];
        $kode_transaksi       = $_POST['kode_transaksi'];
        $kode_barang          = $_POST['kode_barang'];
        $kode_pemasok         = $_POST['kode_pemasok'];
        $jumlah               = $_POST['jumlah'];
        $jenis_transaksi      = $_POST['jenis_transaksi'];
        $tanggal              = $_POST['tanggal'];
        $jumlah_lama          = $_POST['jumlah_lama'];
        $jenis_transaksi_lama = $_POST['jenis_transaksi_lama'];
        // Update the database record using your controller's method
        $dat = $obj->updatetransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $jumlah_lama, $jenis_transaksi_lama);
        $msg = getJSON($dat);
    }
    $rows  = $obj->getTransaksi($id);
    $theme = setTheme();
    getHeader($theme);
?>

    <?php
        if ($msg === true) {
            echo '<div class="alert alert-success" style="display: block" id="message_success">Update Data Berhasil</div>';
            echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'transaksi/">';
        } elseif ($msg === false) {
            echo '<div class="alert alert-danger" style="display: block" id="message_error">Update Gagal</div>';
        } else {

        }

    ?>
        <div class="header icon-and-heading">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
        <h2><strong>transaksi</strong> <small>Edit Data</small> </h2>
        </div>
        <hr style="margin-bottom:-2px;"/>
        <form name="formEdit" class="d-flex flex-column gap-3 my-3" method="POST" action="">
            <input type="hidden" class="form-control" name="submitted" value="1"/>
            <?php foreach ($rows as $row): ?>

                        <input type="hidden" class="form-control" id="id" name="id"
                            value="<?php echo $row['id']; ?>" readonly/>

                        <input type="hidden" class="form-control" id="kode_transaksi" name="kode_transaksi"
                            value="<?php echo $row['kode_transaksi']; ?>"  readonly/>

                        <input type="hidden" class="form-control" id="kode_barang" name="kode_barang"
                            value="<?php echo $row['kode_barang']; ?>" readonly />

                        <input type="hidden" class="form-control" id="kode_pemasok" name="kode_pemasok"
                            value="<?php echo $row['kode_pemasok']; ?>" readonly />

                        <input type="hidden" class="form-control" id="jumlah_lama" name="jumlah_lama"
                            value="<?php echo $row['jumlah']; ?>"  readonly/>

                        <input type="hidden" class="form-control" id="jenis_transaksi_lama" name="jenis_transaksi_lama"
                            value="<?php echo $row['jenis_transaksi']; ?>" readonly/>

                    <div class="form-group">
                        <label>Jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                            value="<?php echo $row['jumlah']; ?>" />
                    </div>

                <div class="form-group">
                    <label>Jenis Transaksi:</label>
                     <input type="text" class="form-control" id="jenis_transaksi" name="jenis_transaksi"
                            value="<?php echo $row['jenis_transaksi']; ?>" readonly />
                </div>

                    <div class="form-group">
                        <label>Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="<?php echo $row['tanggal']; ?>" />
                    </div>


            <?php endforeach; ?>
            <div class="d-flex gap-3 justify-content-end">
                <a href="index.php" class="btn btn-large btn-default">Cancel</a>
                <button class="save btn btn-large btn-info" type="submit">Save</button>
            </div>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
