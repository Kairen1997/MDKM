<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentadbiran - Majlis Daerah Kota Marudu</title>
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

        .logo-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .social-links {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .social-link {
            display: inline-block;
            font-size: 1.5rem;
            text-decoration: none;
            padding: 8px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background-color: rgba(255,255,255,0.2);
            transform: scale(1.1);
        }

        .social-logo {
            width: 24px;
            height: 24px;
            object-fit: contain;
        }

        .contact-logo {
            width: 2rem;
            height: 2rem;
            object-fit: contain;
        }

        .government-logos {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .government-logos img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            flex-shrink: 0;
            filter: contrast(1.2) brightness(1.1);
        }

        .government-logos img:hover {
            opacity: 0.8;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .logo-text h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .logo-text p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-menu a:hover {
            background-color: rgba(255,255,255,0.1);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            text-align: center;
            font-size: 2.5rem;
            color: #228B22;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid #FFD700;
        }

        /* Organizational Chart Styles */
        .org-chart {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .org-title {
            text-align: center;
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .main-division {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.3rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(34, 139, 34, 0.3);
        }

        .units-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 30px;
        }

        .unit {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
        }

        .unit:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: #228B22;
        }

        .unit-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #228B22;
            margin-bottom: 20px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            border: 2px solid #228B22;
        }

        .unit-tasks {
            text-align: left;
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }

        .task-list {
            list-style: none;
            padding: 0;
        }

        .task-item {
            padding: 8px 0;
            border-bottom: 1px solid #f1f3f4;
            font-size: 0.95rem;
            line-height: 1.5;
            color: #555;
            position: relative;
            padding-left: 25px;
        }

        .task-item:last-child {
            border-bottom: none;
        }

        .task-item::before {
            content: counter(task-counter, lower-roman) '.';
            counter-increment: task-counter;
            position: absolute;
            left: 0;
            top: 8px;
            font-weight: bold;
            color: #228B22;
            font-size: 0.9rem;
        }

        .unit:nth-child(1) .unit-tasks {
            counter-reset: task-counter;
        }

        .unit:nth-child(2) .unit-tasks {
            counter-reset: task-counter;
        }

        .unit:nth-child(3) .unit-tasks {
            counter-reset: task-counter;
        }

        .unit:nth-child(4) .unit-tasks {
            counter-reset: task-counter;
        }

        /* Unit specific colors */
        .unit:nth-child(1) .unit-title {
            background: linear-gradient(135deg, #FF6B6B, #FF8E8E);
            color: white;
            border-color: #FF6B6B;
        }

        .unit:nth-child(2) .unit-title {
            background: linear-gradient(135deg, #4ECDC4, #6EDDD6);
            color: white;
            border-color: #4ECDC4;
        }

        .unit:nth-child(3) .unit-title {
            background: linear-gradient(135deg, #45B7D1, #6BC5D8);
            color: white;
            border-color: #45B7D1;
        }

        .unit:nth-child(4) .unit-title {
            background: linear-gradient(135deg, #96CEB4, #A8D5BA);
            color: white;
            border-color: #96CEB4;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 40px 0 20px 0;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-contact h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #FFD700;
        }

        .footer-contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-align: left;
        }

        .footer-contact-item .contact-icon {
            font-size: 1.5rem;
            margin-top: 5px;
            flex-shrink: 0;
        }

        .footer-contact-item h4 {
            color: #FFD700;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .footer-contact-item p {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .footer-copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .footer-copyright p {
            margin: 5px 0;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .units-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }

            .logo-section {
                flex-direction: column;
                gap: 15px;
                width: 100%;
            }

            .header-right {
                flex-direction: column;
                gap: 15px;
                width: 100%;
            }

            .social-links {
                justify-content: center;
            }

            .nav-menu {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .government-logos {
                justify-content: center;
                gap: 20px;
            }

            .government-logos img {
                width: 60px;
                height: 60px;
            }

            .page-title {
                font-size: 2rem;
            }

            .org-chart {
                padding: 20px;
            }

            .units-container {
                grid-template-columns: 1fr;
            }

            .main-division {
                font-size: 1.1rem;
                padding: 20px;
            }
        }
    </style>
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
            <div class="header-right">
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
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <h1 class="page-title">Pentadbiran</h1>

        <!-- Organizational Chart -->
        <div class="org-chart">
            <h2 class="org-title">Pentadbiran</h2>
            
            <!-- Main Division -->
            <div class="main-division">
                BAHAGIAN PENTADBIRAN DAN SUMBER MANUSIA
            </div>

            <!-- Units -->
            <div class="units-container">
                <!-- Unit Tempahan -->
                <div class="unit">
                    <div class="unit-title">UNIT TEMPAHAN</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Mengurus tempahan harta benda MDKM</li>
                            <li class="task-item">Membersihkan dewan/pentas/walai koubasanan/rumah tradisi mengikut jadual / selepas acara selesai</li>
                        </ul>
                    </div>
                </div>

                <!-- Unit Fail dan Rekod -->
                <div class="unit">
                    <div class="unit-title">UNIT FAIL DAN REKOD</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Menyelaras sistem fail dan rekod</li>
                            <li class="task-item">Merekod dan menyimpan fail-fail dan dokumen rasmi jabatan</li>
                            <li class="task-item">Mengurus dokumen-dokumen dan surat-surat jabatan</li>
                            <li class="task-item">Mengurus pelupusan fail dan rekod jabatan</li>
                        </ul>
                    </div>
                </div>

                <!-- Unit Sumber Manusia dan ICT -->
                <div class="unit">
                    <div class="unit-title">UNIT SUMBER MANUSIA DAN ICT</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Urusetia PSM</li>
                            <li class="task-item">Merancang pembangunan sumber manusia dan pembangunan organisasi</li>
                            <li class="task-item">Mengemaskini SM2</li>
                            <li class="task-item">Mengemaskini Buku Penyata Perkhidmatan</li>
                            <li class="task-item">Memantau dan mengemaskini Laman Web Jabatan</li>
                            <li class="task-item">Merancang latihan dalaman</li>
                        </ul>
                    </div>
                </div>

                <!-- Unit Pentadbiran dan Aset -->
                <div class="unit">
                    <div class="unit-title">UNIT PENTADBIRAN DAN ASET</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Mengurus hal pentadbiran dan perkhidmatan jabatan</li>
                            <li class="task-item">Menyelaras penghantaran dan penerimaan surat-surat jabatan</li>
                            <li class="task-item">Menyelaras mesyuarat jawatankuasa Majlis dan jawatankuasa dalaman, perhimpunan</li>
                            <li class="task-item">Memantau kebersihan dalam dan luar pejabat</li>
                            <li class="task-item">Mengurus Program PPKB</li>
                            <li class="task-item">Mengurus Pelantikan Ahli Majlis</li>
                            <li class="task-item">Mengurus Pelantikan JKDB</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-contact">
                <h3>Hubungi Kami</h3>
                <div class="footer-contact-grid">
                    <div class="footer-contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jalan Utama, Kota Marudu<br>89100 Kota Marudu<br>Sabah, Malaysia</p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Telefon</h4>
                            <p>088-123456<br>088-123457</p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p>info@mdkm.gov.my<br>admin@mdkm.gov.my</p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <h4>Waktu Operasi</h4>
                            <p>Isnin - Jumaat<br>8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">
                            <a href="https://www.facebook.com/people/Majlis-Daerah-Kota-Marudu/100064592716263/" target="_blank" title="Ikuti Kami di Facebook">
                                <img src="facebook-logo.png" alt="Facebook" class="contact-logo">
                            </a>
                        </div>
                        <div>
                            <h4>Facebook</h4>
                            <p><a href="https://www.facebook.com/people/Majlis-Daerah-Kota-Marudu/100064592716263/" target="_blank" style="color: white; text-decoration: none;">Ikuti Kami di Facebook</a></p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">
                            <a href="https://www.youtube.com/channel/UClqBIJh4U2HXOVfJqMoD2JA" target="_blank" title="Ikuti Kami di YouTube">
                                <img src="youtube-play-logo-png-7.png" alt="YouTube" class="contact-logo">
                            </a>
                        </div>
                        <div>
                            <h4>YouTube</h4>
                            <p><a href="https://www.youtube.com/channel/UClqBIJh4U2HXOVfJqMoD2JA" target="_blank" style="color: white; text-decoration: none;">Ikuti Kami di YouTube</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2024 Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
            </div>
        </div>
    </footer>

    <script src="sidebar.js"></script>
</body>
</html>
