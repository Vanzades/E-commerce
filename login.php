<?php
    session_start();
    error_reporting(0);
    include "controllers/Login.php";
    include "lib/functions.php";
    $obj = new LoginController();
    $msg = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email    = $_POST["email"];
        $password = $_POST["sandi"];

        // Validasi login
        $dat = $obj->login_validation($email, $password);
        $msg = getJSON($dat);
    }

    $theme = setTheme();
    getHeaderLogin($theme);
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h3 class="text-center text-primary mb-3">Login</h3>

            <?php if ($msg !== null): ?>
                <div class="alert<?php echo($msg ? 'alert-success' : 'alert-danger'); ?> fade show text-center" role="alert">
                    <?php echo($msg ? 'Login Berhasil! Redirecting...' : 'Login Gagal! Cek kembali email & sandi.'); ?>
                </div>
                <?php if ($msg): ?>
                    <meta http-equiv="refresh" content="1;url=<?php echo base_url(); ?>index.php">
                <?php endif; ?>
<?php endif; ?>

            <form id="login-form" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="sandi" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="sandi" name="sandi" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </form>

            <div class="text-center mt-3">
                <small>Belum punya akun? <a href="register.php" class="text-primary">Daftar disini</a></small>
            </div>
        </div>
    </div>
</div>

<?php
    getFooterLogin($theme, '');
?>
