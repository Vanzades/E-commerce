<?php
    include "../controllers/Pemasok.php";
    include "../lib/functions.php";
    $obj = new PemasokController();
    $msg = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $kode_pemasok = $_POST['kode_pemasok'];
        $nama         = $_POST['nama'];
        $alamat       = $_POST['alamat'];
        $kontak       = $_POST['kontak'];
        $foto         = $_POST['foto'];
        // Insert the database record using your controller's method
        $dat = $obj->addpemasok($nama, $alamat, $kontak, $foto);
        $msg = getJSON($dat);
    }
    $theme = setTheme();
    getHeader($theme);
?>

<?php
    if ($msg === true) {
        echo '<div class="alert alert-success" style="display: block" id="message_success">Insert Data Berhasil</div>';
        echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'pemasok/">';
    } elseif ($msg === false) {
        echo '<div class="alert alert-danger" style="display: block" id="message_error">Insert Gagal</div>';
    } else {

    }

?>
        <div class="header icon-and-heading fs-1">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x"></i>
            <h2><strong>Pemasok</strong> <small>Add New Data</small> </h2>
        </div>
        <hr/>
        <form class="d-flex flex-column gap-3" name="formAdd" method="POST" action="" enctype="multipart/form-data">

                    <input type="hidden" class="form-control" name="kode_pemasok"  />

                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama"  />
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" class="form-control" name="alamat"  />
                </div>

                <div class="form-group">
                    <label>Kontak:</label>
                    <input type="text" class="form-control" name="kontak"  />
                </div>

                <div class="form-group">
                    <label>Photo Profile:</label>
                    <input type="file" class="form-control" name="foto"  />
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
