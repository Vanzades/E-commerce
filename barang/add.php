<?php
    include "../controllers/Barang.php";
    include "../lib/functions.php";
    $obj = new BarangController();
    $msg = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $nama      = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $satuan    = $_POST['satuan'];
        $stok      = $_POST['stok'];
        // Insert the database record using your controller's method
        $dat = $obj->addbarang($nama, $deskripsi, $satuan, $stok);
        $msg = getJSON($dat);
    }
    $theme = setTheme();
    getHeader($theme);
?>

<?php
    if ($msg === true) {
        echo '<div class="alert alert-success" style="display: block" id="message_success">Insert Data Berhasil</div>';
        echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'barang/">';
    } elseif ($msg === false) {
        echo '<div class="alert alert-danger" style="display: block" id="message_error">Insert Gagal</div>';
    } else {

    }

?>
        <div class="header icon-and-heading fs-1">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x"></i>
            <h2><strong>barang</strong> <small>Add New Data</small> </h2>
        </div>
        <hr/>
        <form name="formAdd" method="POST" action="">

                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama"  />
                </div>

                <div class="form-group">
                    <label>Deskripsi:</label>
                    <input type="text" class="form-control" name="deskripsi"  />
                </div>

                <div class="form-group">
                    <label>Satuan:</label>
                    <input type="text" class="form-control" name="satuan"  />
                </div>

                <div class="form-group">
                    <label>Stok:</label>
                    <input type="text" class="form-control" name="stok"  />
                </div>

                <div class="mt-3 d-flex flex-row justify-content-end">
                    <a href="index.php" class="btn btn-large btn-secondary mx-3">Cancel <a/>
                    <button class="save btn btn-large btn-primary" type="submit">Save</button>
                </div>

        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
