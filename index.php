<?php
// Modern landing page

require_once __DIR__ . '/header.php';
?>
<?php
$active_page = 'dashboard'; 
?>
<div id="main-content-wrapper">
<div class="card shadow-lg border-0" style="max-width: 600px;">
    
    <div class="card-body p-5 text-center"> <i class="bi bi-gear-fill display-3 text-primary mb-3"></i>
        
        <h1 class="display-4 fw-bolder text-dark mb-3">
            Welcome Sistem Informasi
        </h1>
        
        <p class="lead text-secondary mx-auto mb-5">
            Sistem Akademik ini dirancang untuk memudahkan pengelolaan data Dosen, Mahasiswa, Mata Kuliah, dan KRS. Silakan gunakan menu **Sidebar** di sebelah kiri untuk navigasi.
        </p>

        <div class="d-flex justify-content-center flex-wrap gap-3">
            <a href="dosen/index.php" class="btn btn-primary btn-lg shadow-sm">
                <i class="bi bi-person-badge-fill me-2"></i> Mulai Kelola Data Dosen
            </a>
            <a href="mahasiswa/index.php" class="btn btn-primary btn-lg shadow-sm">
                <i class="bi bi-people-fill me-2"></i> Mulai Kelola Data Mahasiswa
            </a>
        </div>
    </div>
</div> 
</div> 
<?php 
include 'footer.php'; 
?>

