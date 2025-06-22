<?php
    include "../controllers/Transaksi.php";
    include "../controllers/Barang.php";
    include "../controllers/Pemasok.php";
    include "../lib/functions.php";
    $obj       = new TransaksiController();
    $mybarang  = new BarangController();
    $mypemasok = new PemasokController();
    $barang    = $mybarang->getBarangList();
    $pemasok   = $mypemasok->getPemasokList();
    $msg       = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $kode_barang     = $_POST['kode_barang'];
        $kode_pemasok    = $_POST['kode_pemasok'];
        $jumlah          = $_POST['jumlah'];
        $jenis_transaksi = $_POST['jenis_transaksi'];
        // Insert the database record using your controller's method
        $dat = $obj->addtransaksi($kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi);
        $msg = getJSON($dat);
    }
    $theme = setTheme();
    getHeader($theme);
?>

<?php
    if ($msg === true) {
        echo '<div class="alert alert-success" style="display: block" id="message_success">Insert Data Berhasil</div>';
        echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'transaksi/">';
    } elseif ($msg === false) {
        echo '<div class="alert alert-danger" style="display: block" id="message_error">Insert Gagal</div>';
    } else {

    }

?>
        <div class="header icon-and-heading fs-1">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x"></i>
            <h2><strong>Transaksi</strong> <small>Add New Data</small> </h2>
        </div>
        <hr/>
        <form name="formAdd" class="d-flex flex-column gap-2 mt-3" method="POST" action="">

            <div class="form-group">
                <label for="barang">Pilih Barang:</label>
                <select class="form-control mb-3" name="kode_barang" id="kode_barang">
                    <option>Pilih Barang...</option>
                    <?php foreach ($barang as $brg): ?>
                        <option value="<?php echo htmlspecialchars($brg['kode_barang']); ?>">
                            <?php echo htmlspecialchars($brg['kode_barang']) . ' - ' . htmlspecialchars($brg['nama']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="barang">Pilih Pemasok:</label>
                <select class="form-control mb-3" name="kode_pemasok" id="kode_pemasok">
                    <option value="">Pilih Pemasok...</option>
                    <?php foreach ($pemasok as $slp): ?>
                        <option value="<?php echo htmlspecialchars($slp['kode_pemasok']); ?>">
                            <?php echo htmlspecialchars($slp['kode_pemasok']) . ' - ' . htmlspecialchars($slp['nama']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

                <div class="form-group">
                    <label>Jumlah:</label>
                    <input type="number" class="form-control" name="jumlah"  />
                </div>

                <div class="form-group">
                    <label>jenis transaksi:</label>
                    <select id="jenis_transaksi" name="jenis_transaksi" style="width:150px" class="form-control">
                        <option value="">--pilih--</option>
                        <option value="masuk">masuk</option><option value="keluar">keluar</option>
                    </select>
                </div>

            <div class="d-flex flex-row justify-content-end gap-2">
                <a href="index.php" class="btn btn-large btn-default">Cancel</a>
                <button class="save btn btn-large btn-primary" type="submit">Save</button>
            </div>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
