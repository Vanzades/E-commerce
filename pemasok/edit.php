<?php
    include "../controllers/Pemasok.php";
    include "../lib/functions.php";
    $obj = new PemasokController();
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $msg = null;
    if (isset($_POST["submitted"]) == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $id           = $_POST['id'];
        $kode_pemasok = $_POST['kode_pemasok'];
        $nama         = $_POST['nama'];
        $alamat       = $_POST['alamat'];
        $kontak       = $_POST['kontak'];
        // Update the database record using your controller's method
        $dat = $obj->updatepemasok($id, $kode_pemasok, $nama, $alamat, $kontak);
        $msg = getJSON($dat);
    }
    $rows  = $obj->getPemasok($id);
    $theme = setTheme();
    getHeader($theme);
?>

    <?php
        if ($msg === true) {
            echo '<div class="alert alert-success" style="display: block" id="message_success">Update Data Berhasil</div>';
            echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'pemasok/">';
        } elseif ($msg === false) {
            echo '<div class="alert alert-danger" style="display: block" id="message_error">Update Gagal</div>';
        } else {

        }

    ?>
        <div class="header icon-and-heading">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
        <h2><strong>Pemasok</strong> <small>Edit Data</small> </h2>
        </div>
        <hr style="margin-bottom:-2px;"/>
        <form name="formEdit" class="d-flex flex-column gap-3 mt-3" method="POST" action="">
            <input type="hidden" class="form-control" name="submitted" value="1"/>
            <?php foreach ($rows as $row): ?>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id"
                            value="<?php echo $row['id']; ?>" readonly/>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="kode_pemasok" name="kode_pemasok"
                            value="<?php echo $row['kode_pemasok']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $row['nama']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="<?php echo $row['alamat']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>kontak:</label>
                        <input type="text" class="form-control" id="kontak" name="kontak"
                            value="<?php echo $row['kontak']; ?>" />
                    </div>


            <?php endforeach; ?>
            <div class="d-flex justify-content-end gap-3">
                <a href="index.php" class="btn btn-large btn-default">Cancel</a>
                <button class="save btn btn-large btn-info" type="submit">Edit</button>
            </div>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
