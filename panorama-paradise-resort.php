<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panorama Paradise Resort - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo-section { display: flex; align-items: center; gap: 10px; }
        .government-logos { display: flex; align-items: center; gap: 8px; }
        .government-logos img { width: 80px; height: 80px; object-fit: contain; flex-shrink: 0; filter: contrast(1.2) brightness(1.1); }
        .logo { display: flex; align-items: center; gap: 15px; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; flex-shrink: 0; }
        .logo-text h1 { font-size: 1.8rem; font-weight: bold; margin-bottom: 5px; }
        .logo-text p { font-size: 0.9rem; opacity: 0.9; }

        .nav-menu { display: flex; list-style: none; gap: 30px; }
        .nav-menu a { color: white; text-decoration: none; font-weight: 500; transition: color 0.3s ease; padding: 10px 15px; border-radius: 5px; }
        .nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

        /* Page Layout */
        .main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .page-title { text-align: left; font-size: 3rem; color: #2c3e50; margin-bottom: 30px; font-weight: 800; }

        .intro-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 40px;
            align-items: start;
        }

        .gallery {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            align-items: start;
        }

        .gallery figure {
            margin: 0;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }

        .gallery img {
            display: block;
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .info-card {
            margin-top: 8px;
            background: #e6ffe6;
            border: 1px solid #b5e7b5;
            border-radius: 10px;
            padding: 16px;
            color: #2f5132;
            box-shadow: 0 4px 12px rgba(34,139,34,0.12);
        }

        .content-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 28px;
            border: 1px solid #e9ecef;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }

        .content-card h2 { font-size: 1.6rem; color: #2c3e50; margin-bottom: 12px; }
        .content-card p { margin-bottom: 14px; color: #444; }
        .content-card ul { padding-left: 18px; }
        .content-card li { margin-bottom: 8px; }

        /* Footer */
        .footer { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 40px 0 20px 0; margin-top: 50px; }
        .footer-content { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .footer-contact h3 { font-size: 1.5rem; margin-bottom: 20px; text-align: center; color: #FFD700; }
        .footer-copyright { text-align: center; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); }

        /* Responsive */
        @media (max-width: 992px) {
            .intro-grid { grid-template-columns: 1fr; }
            .page-title { font-size: 2.4rem; text-align: center; }
        }
        @media (max-width: 600px) {
            .gallery img { height: 180px; }
        }
    </style>
    <meta name="description" content="Pengenalan ringkas Panorama Paradise Resort di Kota Marudu – destinasi eco-retreat yang menarik dengan aktiviti rekreasi alam semula jadi.">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo-section">
                <div class="government-logos">
                    <img src="Jata_Negara-removebg-preview.png" alt="Jata Negara Malaysia" title="Jata Negara Malaysia">
                    <img src="Jata_Wilayah_Sabah-removebg-preview.png" alt="Jata Wilayah Sabah" title="Jata Wilayah Sabah">
                </div>
                <div class="logo">
                    <img src="Logo_MDKM_1-removebg-preview.png" alt="Majlis Daerah Kota Marudu Logo" class="logo-img">
                    <div class="logo-text">
                        <h1>Majlis Daerah Kota Marudu</h1>
                        <p>Melayani Masyarakat dengan Dedikasi</p>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="landingpage.php">Beranda</a></li>
                    <li><a href="landingpage.php#berita">Berita</a></li>
                    <li><a href="landingpage.php#pengumuman">Pengumuman</a></li>
                    <li><a href="landingpage.php#aktiviti">Aktiviti</a></li>
                    <li><a href="landingpage.php#perkhidmatan">Perkhidmatan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-title">Panorama Paradise Resort</div>

        <section class="intro-grid">
            <!-- Left: Images and info card -->
            <div>
                <div class="gallery">
                    <figure>
                        <img src="paradise%20KM%201.jpg" alt="Panorama Paradise Resort - pemandangan bangunan kaca dan persekitaran hijau">
                    </figure>
                    <figure>
                        <img src="paradies%20km%202.jpg" alt="Panorama Paradise Resort - papan tanda Villa Check-In dan tangga taman">
                    </figure>
                </div>
                <div class="info-card">
                    <strong>Maklumat penting</strong><br>
                    Lokasi: Panorama Paradise Eco-Retreat, Jalan Kg. Rasak Tigaman, Bukit Pinotudung.<br>
                    Facebook: Panorama Paradise Eco-Retreat<br>
                    Hubungi: 019-816 0650<br>
                    Waktu operasi: 08:00am – 17:00pm<br>
                    Laman web: panoramaparadise.com
                </div>
            </div>

            <!-- Right: Rich text description -->
            <article class="content-card">
                <h2>Pengenalan</h2>
                <p>
                    Juga dikenali sebagai Panorama Paradise Eco‑Retreat, destinasi ini terletak di
                    Bukit Pinotudung, Jalan Kg. Rasak Tigaman. Beroperasi sejak tahun 2012, tempat
                    menarik ini menjadi tumpuan pelancong dalam dan luar negara untuk menikmati
                    panorama perbukitan, suasana kampung, dan udara segar.
                </p>
                <p>
                    Antara aktiviti yang boleh dilakukan termasuk berkemah, bersiar‑siar di taman
                    herba, melihat rusa yang jinak, dan barbeku di pondok tradisional.
                </p>
                <ul>
                    <li>Tapak perkhemahan luas dan mesra keluarga</li>
                    <li>Spot matahari terbit dan senja yang menakjubkan</li>
                    <li>Kemudahan asas: tandas, pondok rehat, kawasan BBQ</li>
                </ul>
                <p>
                    Untuk tempahan atau pertanyaan, sila rujuk maklumat di sebelah atau hubungi
                    pihak pengurusan melalui saluran rasmi mereka.
                </p>
            </article>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-contact">
                <h3>Hubungi Kami</h3>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2024 Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
            </div>
        </div>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>


