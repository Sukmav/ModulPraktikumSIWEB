<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<form method="POST" actioin="controller/proses_login.php">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control"
            value="<?php echo $_COOKIE['username'] ?? ''; ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="remember" class="form-check-input">
        <label class="form-check-label" for="remember">Remember Me</label>
    </div>

    <button type="submit" class="btn btn-warning w-100">Login</button>

    <div class="text-center mt-3">
        <a href="index.php" class="text-white">Kembali ke Beranda</a>
    </div>
</form>