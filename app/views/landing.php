<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>ExploreNesia Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css?v=9999">
</head>

<body>

    <nav class="navbar">
        <div class="logo">Explore<span>Nesia</span></div>

        <ul class="nav-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="#destinasi">Destinasi</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#contact">Kontak</a></li>

            <?php if (isset($_SESSION['login'])) : ?>
                <li class="user-menu">
                    <button class="user-btn">
                        👤 <?= $_SESSION['username']; ?> ▾
                    </button>

                    <div class="dropdown">
                        <h4><?= $_SESSION['name']; ?></h4>
                        <a href="#">Pesanan Saya</a>
                        <a href="#">Daftar Pembelian</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
            <?php else : ?>
                <li><a href="index.php?page=login" class="login-btn">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <?php if (isset($_SESSION['login_success'])) : ?>
        <div class="modal-overlay" id="successModal">
            <div class="success-modal">
                <div class="check-icon">✓</div>
                <h2>Login Berhasil!</h2>
                <p>Selamat datang kembali, <?= $_SESSION['username']; ?>.</p>
                <button onclick="closeModal()">Lanjutkan</button>
            </div>
        </div>

        <script>
            function closeModal() {
                document.getElementById("successModal").style.display = "none";
            }
        </script>

        <?php unset($_SESSION['login_success']); ?>
    <?php endif; ?>

    <section class="hero" id="home">

        <div class="hero-text">
            <p class="hero-label">EXPLORE THE WORLD</p>

            <h1>
                Temukan Liburan Impianmu Bersama ExploreNesia
            </h1>

            <p class="hero-desc">
                Nikmati perjalanan terbaik ke berbagai destinasi indah di Indonesia
                dengan pengalaman yang aman, nyaman, dan tak terlupakan.
            </p>

            <div class="hero-buttons">
                <a href="#destinasi" class="btn-primary">
                    Lihat Destinasi
                </a>

                <a href="#about" class="btn-secondary">
                    Tentang Kami
                </a>
            </div>

        </div>

        <div class="hero-card">
            <h3>Travel Package</h3>
            <p>Mulai dari</p>
            <h2>Rp750.000</h2>
            <span>per orang</span>
        </div>

    </section>

    <section class="features">
        <div class="feature-box">
            <h3>Destinasi Populer</h3>
            <p>Pilihan tempat wisata terbaik di Indonesia.</p>
        </div>

        <div class="feature-box">
            <h3>Tour Guide</h3>
            <p>Pemandu perjalanan ramah dan berpengalaman.</p>
        </div>

        <div class="feature-box">
            <h3>Hotel Nyaman</h3>
            <p>Akomodasi terbaik untuk perjalananmu.</p>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="assets/images/bali.jpg" alt="Bali">
        </div>

        <div class="about-text">
            <p class="section-label">TENTANG KAMI</p>
            <h2>Partner Terbaik untuk Perjalanan Wisatamu</h2>
            <p>
                ExploreNesia adalah layanan travel yang membantu pengguna menemukan
                destinasi wisata terbaik dengan paket perjalanan yang aman, nyaman,
                dan terjangkau.
            </p>

            <div class="about-list">
                <p>Paket wisata fleksibel</p>
                <p>Harga terjangkau</p>
                <p>Pelayanan ramah</p>
            </div>
        </div>
    </section>

    <section class="layanan" id="layanan">
        <p class="section-label">LAYANAN KAMI</p>
        <h2>Layanan Travel Terbaik</h2>

        <div class="service-container">
            <div class="service-card">
                <div class="service-icon">✈️</div>
                <h3>Paket Wisata</h3>
                <p>Paket perjalanan ke berbagai destinasi indah di Indonesia.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏝️</div>
                <h3>Open Trip</h3>
                <p>Liburan seru bersama traveler lain dengan harga hemat.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚌</div>
                <h3>Transportasi</h3>
                <p>Perjalanan nyaman dengan transportasi pilihan terbaik.</p>
            </div>
        </div>
    </section>

    <section class="travel-banner bromo-banner">
        <div class="banner-content">
            <p class="banner-label">EXPLORE BROMO</p>

            <h2>
                Saksikan Sunrise Terbaik di Gunung Bromo
            </h2>

            <p>
                Pengalaman melihat matahari terbit yang
                menjadi impian banyak wisatawan.
            </p>

            <a href="#" class="banner-btn">
                EXPLORE MORE →
            </a>
        </div>
    </section>

    <section class="destinasi" id="destinasi">
        <p class="section-label">DESTINASI FAVORIT</p>
        <h2>Tempat Wisata Populer</h2>

        <div class="destination-container">

            <div class="destination-card">
                <img src="assets/images/bali.jpg" alt="Bali">

                <div class="destination-content">
                    <div class="destination-header">
                        <h3>Bali Paradise</h3>
                        <div class="price">
                            From <span>Rp1.500K</span>
                        </div>
                    </div>

                    <div class="rating">
                        <span>4,8</span>
                        <span class="stars">★★★★★</span>
                    </div>

                    <p>
                        Nikmati keindahan pantai, budaya, dan alam Bali
                        dengan pengalaman liburan terbaik.
                    </p>

                    <a href="#" class="book-btn">BOOK NOW →</a>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/bromo.jpg" alt="Bromo">

                <div class="destination-content">
                    <div class="destination-header">
                        <h3>Bromo Sunrise</h3>
                        <div class="price">
                            From <span>Rp750K</span>
                        </div>
                    </div>

                    <div class="rating">
                        <span>4,7</span>
                        <span class="stars">★★★★★</span>
                    </div>

                    <p>
                        Rasakan suasana sunrise terbaik di Gunung Bromo
                        bersama tour guide profesional.
                    </p>

                    <a href="#" class="book-btn">BOOK NOW →</a>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/raja ampat.jpg" alt="Open Trip">

                <div class="destination-content">
                    <div class="destination-header">
                        <h3>Open Trip Nusantara</h3>
                        <div class="price">
                            From <span>Rp950K</span>
                        </div>
                    </div>

                    <div class="rating">
                        <span>4,9</span>
                        <span class="stars">★★★★★</span>
                    </div>

                    <p>
                        Liburan hemat dan seru bersama traveler lain
                        ke berbagai destinasi pilihan.
                    </p>

                    <a href="#" class="book-btn">BOOK NOW →</a>
                </div>
            </div>

        </div>
    </section>

    <section class="travel-banner bali-banner">
        <div class="banner-content">
            <p class="banner-label">EXPLORE BALI</p>

            <h2>
                Nikmati Keindahan Alam dan Budaya Bali
            </h2>

            <p>
                Temukan pantai eksotis, budaya yang kaya,
                dan pengalaman wisata tak terlupakan.
            </p>

            <a href="#" class="banner-btn">
                EXPLORE MORE →
            </a>
        </div>
    </section>

    <section class="testimoni" id="testimoni">
        <p class="section-label">TESTIMONI</p>
        <h2>Apa Kata Mereka?</h2>

        <div class="testimonial-container">

            <div class="testimonial-card">

                <img src="assets/images/user1.jpg" alt="User">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Pelayanannya sangat ramah dan perjalanan kami
                    menjadi lebih menyenangkan."
                </p>

                <h4>Song Kang</h4>
                <span>Traveler from Korea</span>

            </div>

            <div class="testimonial-card">

                <img src="assets/images/user2.jpg" alt="User">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Harga paket sangat terjangkau dan itinerary
                    tersusun dengan baik."
                </p>

                <h4>Byeon Woo Seok</h4>
                <span>Traveler from Korea</span>

            </div>

            <div class="testimonial-card">

                <img src="assets/images/user3.jpg" alt="User">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Destinasinya luar biasa dan tour guide sangat
                    membantu selama perjalanan."
                </p>

                <h4>Kim Tae-hyung</h4>
                <span>Traveler from Korea</span>

            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-brand">
                <h2>✈ Explore<span>Nesia</span></h2>
                <p>
                    ExploreNesia membantu kamu menemukan destinasi wisata terbaik
                    dengan pengalaman perjalanan yang nyaman dan berkesan.
                </p>
            </div>

            <div class="footer-column">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#about">Tentang Kami</a>
                <a href="#destinasi">Destinasi</a>
                <a href="#contact">Kontak</a>
            </div>

            <div class="footer-column">
                <h3>Other Pages</h3>
                <a href="#">Privacy & Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Disclaimer</a>
                <a href="#">FAQ</a>
            </div>

            <div class="footer-column">
                <h3>Contact Info</h3>
                <p>Jl. Niti Mandala, Renon,<br>Bali 80225</p>
                <p>+62 812-3456-7890</p>
                <p>info@explorenesia.com</p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>Travel & Tour Agency Landing Page</p>
            <p>Copyright © 2026. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>