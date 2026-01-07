<?php
// session_start() JANGAN ADA DI SINI

// Jika sudah login, redirect
if (isset($_SESSION['login'])) {
    header("Location: ../home/index");
    exit;
}

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database(); // sudah tersedia dari index.php

    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = $db->query("SELECT * FROM users WHERE username='$u' LIMIT 1");

    if ($q && $q->num_rows > 0) {
        $user = $q->fetch_assoc();
        
        if (password_verify($p, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['username'] = $user['username'];

            header("Location: ../home/index");
            exit;
        }
    }

    $msg = "Login gagal! Username atau password salah.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container col-md-4 mt-5">
<div class="card p-4 shadow">
<h3 class="text-center mb-3">Login Admin</h3>

<?php if ($msg): ?>
<div class="alert alert-danger"><?= $msg ?></div>
<?php endif; ?>

<form method="POST">
<input class="form-control mb-3" name="username" placeholder="Username" required>
<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
<button class="btn btn-dark w-100">Login</button>
</form>

</div>
</div>

</body>
</html>
