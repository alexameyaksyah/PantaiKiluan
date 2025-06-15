<?php
// Set base_url untuk path absolut
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
$current_path = dirname($_SERVER['SCRIPT_NAME']);

// Jika tidak di root directory, tambahkan path
if ($current_path != '/') {
    $base_url .= $current_path;
}

// Set default page title jika tidak ada
$page_title = isset($pageTitle) ? $pageTitle : 'Destinasi Wisata';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Lampung - <?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Website resmi destinasi wisata di Lampung">
    <meta name="keywords" content="wisata, lampung, pariwisata, liburan">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo $base_url; ?>/assets/images/favicon.ico" type="image/x-icon">
    
    <!-- CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo $base_url; ?>/assets/css/style_23312051.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>/index.php">
                <i class="fas fa-mountain"></i> Kisi-kisi Uas P.Web@2025-23312051-Alex Amey Aksyah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php#info">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php#deskripsi">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/acara_23312051.php">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/biodata_23312051.php">Biodata</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>