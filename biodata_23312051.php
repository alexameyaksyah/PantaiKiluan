<?php
// biodata.php
$pageTitle = "Biodata Pembuat";
include 'includes/header_23312051.php';
?>

<!-- Biodata -->
<section id="biodata" class="py-5">
    <div class="container">
        <div class="section-title">
            <h2>Biodata Pembuat</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="info-card text-center fade-in">
                    <div class="mb-4">
                        <img src="<?php echo $base_url; ?>/assets/images/IMG_0155.jpg"
                        class="rounded-circle mb-3" width="200" height="228" alt="Foto Profil">
                    </div>
                    <p><strong>Nama:</strong> Alex Amey Aksyah</p>
                    <p><strong>NPM:</strong> 23312051</p>
                    <p><strong>Kelas:</strong> IF 23 FX</p>
                    <p><strong>No Absen:</strong> 4</p>
                    
                    <div class="mt-4">
                        <h5><i class="fas fa-video"></i> Video Pengenalan Diri</h5>
                        <video controls class="w-100" style="max-width: 600px; border-radius: 10px;">
                            <source src="assets/images/VideoPerkenalan.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer_23312051.php';
?>