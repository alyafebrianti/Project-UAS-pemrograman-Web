<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
html, body {
    height: 100%;
}

body {
    background: #f4f6f9;
    display: flex;
    flex-direction: column;
}

.navbar {
    box-shadow: 0 2px 6px rgba(0,0,0,.1);
}

.card {
    border: none;
    border-radius: 10px;
}

/* INI KUNCI FOOTER DI BAWAH */
.main-content {
    flex: 1;
}
</style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="/lab11_php_oop/home/index">Lab OOP</a>

<ul class="navbar-nav ms-auto">
<?php if (isset($_SESSION['login'])): ?>
    <li class="nav-item"><a class="nav-link" href="/lab11_php_oop/artikel/index">Artikel</a></li>
    <li class="nav-item"><a class="nav-link" href="/lab11_php_oop/user/profile">Profil</a></li>
    <li class="nav-item">
        <a class="nav-link text-warning" href="/lab11_php_oop/user/logout">
            Logout (<?= $_SESSION['nama'] ?>)
        </a>
    </li>
<?php else: ?>
    <li class="nav-item"><a class="nav-link" href="/lab11_php_oop/user/login">Login</a></li>
<?php endif; ?>
</ul>
</div>
</nav>

<!-- PEMBUNGKUS KONTEN -->
<div class="container mt-4 main-content">
