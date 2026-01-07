<div class="card p-5 text-center">
<?php if (!isset($_SESSION['login'])): ?>
    <h1 class="mb-3">Selamat Datang di Admin Panel</h1>
    <p class="text-muted">Silakan login untuk mengelola artikel.</p>
    <a href="/lab11_php_oop/user/login" class="btn btn-primary mt-3">Login Sekarang</a>
<?php else: ?>
    <h1>Halo, <?= $_SESSION['nama'] ?> 👋</h1>
    <p class="text-muted">Silakan kelola data melalui menu di atas.</p>
<?php endif; ?>
</div>
