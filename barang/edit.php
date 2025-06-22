<?php
    include "../controllers/Barang.php";
    include "../lib/functions.php";
    $obj = new BarangController();
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $msg = null;
    if (isset($_POST["submitted"]) == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $id          = $_POST['id'];
        $kode_barang = $_POST['kode_barang'];
        $nama        = $_POST['nama'];
        $deskripsi   = $_POST['deskripsi'];
        $satuan      = $_POST['satuan'];
        $stok        = $_POST['stok'];
        $created_at  = $_POST['created_at'];
        $updated_at  = $_POST['updated_at'];
        // Update the database record using your controller's method
        $dat = $obj->updatebarang($id, $kode_barang, $nama, $deskripsi, $satuan, $stok, $created_at, $updated_at);
        $msg = getJSON($dat);
    }
    $rows  = $obj->getBarang($id);
    $theme = setTheme();
    getHeader($theme);
?>

    <?php
        if ($msg === true) {
            echo '<div class="alert alert-success" style="display: block" id="message_success">Update Data Berhasil</div>';
            echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'barang/">';
        } elseif ($msg === false) {
            echo '<div class="alert alert-danger" style="display: block" id="message_error">Update Gagal</div>';
        } else {

        }

    ?>
        <div class="header icon-and-heading">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
        <h2><strong>barang</strong> <small>Edit Data</small> </h2>
        </div>
        <hr style="margin-bottom:-2px;"/>
        <form class="d-flex flex-column gap-2" name="formEdit" method="POST" action="">
            <input type="hidden" class="form-control" name="submitted" value="1"/>
            <?php foreach ($rows as $row): ?>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id"
                            value="<?php echo $row['id']; ?>" readonly/>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="kode_barang" name="kode_barang"
                            value="<?php echo $row['kode_barang']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $row['nama']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            value="<?php echo $row['deskripsi']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>satuan:</label>
                        <input type="text" class="form-control" id="satuan" name="satuan"
                            value="<?php echo $row['satuan']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>stok:</label>
                        <input type="text" class="form-control" id="stok" name="stok"
                            value="<?php echo $row['stok']; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="created_at" name="created_at"
                            value="<?php echo $row['created_at']; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="updated_at" name="updated_at"
                            value="<?php echo $row['updated_at']; ?>" />
                    </div>


            <?php endforeach; ?>
                <div class="mt-3 d-flex flex-row justify-content-end">
                    <a href="index.php" class="btn btn-large btn-secondary mx-3">Cancel <a/>
                <button class="save btn btn-large btn-info" type="submit">Edit</button>
                </div>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
