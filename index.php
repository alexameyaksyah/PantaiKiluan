<?php
// index.php
$pageTitle = "Destinasi Wisata Lampung";
include 'includes/header_23312051.php';
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="hero-content">
        <h1 class="fade-in">Pantai Kiluan</h1>
        <p class="fade-in">Destinasi Wisata Bahari Terbaik di Lampung Selatan</p>
        <button class="btn btn-primary btn-lg fade-in" onclick="scrollToSection('info')">
            <i class="fas fa-compass"></i> Eksplorasi Sekarang
        </button>
    </div>
</section>

<!-- Informasi Umum -->
<section id="info" class="py-5">
    <div class="container">
        <div class="section-title">
            <h2>Informasi Umum</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="info-card fade-in">
                    <h4><i class="fas fa-map-marker-alt"></i> Lokasi & Alamat</h4>
                    <p><strong>Alamat:</strong> Desa Kiluan Negeri, Kecamatan Kelumbayan, Kabupaten Tanggamus, Lampung Selatan</p>
                    <p><strong>Kabupaten:</strong> Lampung Selatan, Lampung</p>
                    <div class="mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127748.64141572315!2d105.26632!3d-5.42917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40daacdabc4f1f%3A0x9c30bae8470f27c8!2sBandar%20Lampung%2C%20Bandar%20Lampung%20City%2C%20Lampung!5e0!3m2!1sen!2sid" 
                                width="100%" height="200" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="info-card fade-in">
                    <h4><i class="fas fa-clock"></i> Jam Operasional</h4>
                    <p><strong>Senin - Jumat:</strong> 08:00 - 17:00 WIB</p>
                    <p><strong>Sabtu - Minggu:</strong> 07:00 - 18:00 WIB</p>
                    <p><strong>Hari Libur:</strong> 07:00 - 18:00 WIB</p>
                </div>
            </div> 
            <div class="col-lg-6 mb-4">
                <div class="info-card fade-in">
                    <h4><i class="fas fa-ticket-alt"></i> Harga Tiket</h4>
                    <p><strong>Dewasa:</strong> Rp 15.000</p>
                    <p><strong>Anak-anak:</strong> Rp 10.000</p>
                    <p><strong>Parkir Motor:</strong> Rp 2.000</p>
                    <p><strong>Parkir Mobil:</strong> Rp 5.000</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="info-card fade-in">
                    <h4><i class="fas fa-phone"></i> Kontak Resmi</h4>
                    <p><i class="fas fa-phone"></i> <strong>Telepon:</strong> +62-895-3231-58706</p>
                    <p><i class="fab fa-whatsapp text-success"></i> <strong>WhatsApp:</strong> +62-895-3231-58706</p>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong> info@pantaikiluan.com</p>
                    <p><i class="fab fa-instagram text-primary"></i> <strong>Instagram:</strong> @pantaikiluanpantaikiluan_official</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deskripsi Tempat -->
<section id="deskripsi" class="py-5 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Deskripsi Tempat Wisata</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="info-card fade-in">
                    <h4><i class="fas fa-leaf"></i> Wisata Alam Bahari</h4>
                    
                    <h4 class="mt-4"><i class="fas fa-star"></i> Daya Tarik Utama</h4>
                    <ul>
                        <li>Lumba-lumba liar</li>
                        <li>Snorkeling di terumbu karang</li>
                        <li>Sunrise spektakuler</li>
                        <li>Pemandangan Gunung Krakatau</li>
                        <li>Spot foto Instagram-able</li>
                    </ul>
                    
                    <h4 class="mt-4"><i class="fas fa-running"></i> Aktivitas yang Bisa Dilakukan</h4>
                    <ul>
                        <li>Boat watching lumba-lumba</li>
                        <li>Snorkeling</li>
                        <li>Berenang</li>
                        <li>Voli pantai</li>
                        <li>Memancing</li>
                        <li>Jalan-jalan pantai</li>
                    </ul>
                    
                    <p class="mt-3">
                        Keindahan alam yang memukau menanti Anda
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas -->
<section id="fasilitas" class="py-5">
    <div class="container">
        <div class="section-title">
            <h2>Fasilitas</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-car"></i>
                    <h5>Tempat Parkir</h5>
                    <p>Area parkir luas untuk motor dan mobil</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-restroom"></i>
                    <h5>Toilet</h5>
                    <p>Toilet bersih dan terawat</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-pray"></i>
                    <h5>Mushola</h5>
                    <p>Tempat ibadah yang nyaman</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-utensils"></i>
                    <h5>Tempat Makan</h5>
                    <p>Kantin dengan menu lokal</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-tools"></i>
                    <h5>Penyewaan Alat</h5>
                    <p>Sewa alat penunjang aktivitas</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="facility-item fade-in">
                    <i class="fas fa-gift"></i>
                    <h5>Toko Souvenir</h5>
                    <p>Oleh-oleh khas daerah</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeri -->
<section id="galeri" class="py-5 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Galeri Media</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="<?php echo $base_url; ?>/assets/images/gallery1.jpg" 
                     class="img-fluid gallery-img" alt="Pemandangan Pantai Kiluan" 
                     data-bs-toggle="modal" data-bs-target="#galleryModal"
                     onclick="setModalImage(this.src, this.alt)">
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php echo $base_url; ?>/assets/images/gallery2.jpeg" 
                     class="img-fluid gallery-img" alt="Pemandangan Pantai Kiluan" 
                     data-bs-toggle="modal" data-bs-target="#galleryModal"
                     onclick="setModalImage(this.src, this.alt)">
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php echo $base_url; ?>/assets/images/gallery3.jpeg" 
                     class="img-fluid gallery-img" alt="Pemandangan Pantai Kiluan" 
                     data-bs-toggle="modal" data-bs-target="#galleryModal"
                     onclick="setModalImage(this.src, this.alt)">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">
                <div class="info-card">
                    <h4><i class="fab fa-youtube text-danger"></i> Video Promosi</h4>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/pJDRe8yB5vc?si=oqo0KbRpr0IpGP_P" 
                                title="Video Tempat Wisata" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer_23312051.php';
?>