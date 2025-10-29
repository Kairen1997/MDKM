<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencapaian Piagam Pelanggan - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa; }

        /* Header */
        .header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
        .logo-section { display: flex; align-items: center; gap: 10px; }
        .header-right { display: flex; align-items: center; gap: 20px; }
        .government-logos { display: flex; align-items: center; gap: 8px; }
        .government-logos img { width: 80px; height: 80px; object-fit: contain; filter: contrast(1.2) brightness(1.1); }
        .logo { display: flex; align-items: center; gap: 15px; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; }
        .logo-text h1 { font-size: 1.8rem; font-weight: bold; margin-bottom: 5px; }
        .logo-text p { font-size: 0.9rem; opacity: 0.9; }
        .nav-menu { display: flex; list-style: none; gap: 30px; }
        .nav-menu a { color: white; text-decoration: none; font-weight: 500; padding: 10px 15px; border-radius: 5px; transition: color 0.3s ease; }
        .nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

        /* Main */
        .main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .page-title { font-size: 2.6rem; color: #2c3e50; text-align: left; margin-bottom: 10px; font-weight: 800; letter-spacing: 0.4px; }
        .page-subtitle { color: #6c757d; margin-bottom: 30px; }

        .achievement-hero { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); margin-bottom: 25px; }
        .hero-image { width: 100%; border-radius: 8px; border: 1px solid #e5e7eb; background: #fffef0; }
        .hero-caption { font-size: 0.95rem; color: #6c757d; margin-top: 10px; }

        .section { background: white; padding: 24px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); margin-bottom: 25px; }
        .section-title { font-size: 1.4rem; color: #228B22; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 3px solid #FFD700; }

        /* Responsive Table */
        .table-wrap { width: 100%; overflow-x: auto; border: 1px solid #e5e7eb; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; font-size: 0.95rem; }
        thead th { background: #f7f9fb; color: #2f3c48; text-align: left; padding: 12px 14px; border-bottom: 1px solid #e5e7eb; white-space: nowrap; }
        tbody td { padding: 12px 14px; border-bottom: 1px solid #f0f2f5; vertical-align: top; }
        tbody tr:hover { background: #f9fff9; }

        .badge { display: inline-block; padding: 4px 10px; border-radius: 999px; font-size: 0.85rem; font-weight: 600; }
        .badge-success { background: #e6ffed; color: #166534; }
        .badge-warning { background: #fff7ed; color: #9a3412; }
        .badge-info { background: #eff6ff; color: #1e40af; }

        /* Footer */
        .footer { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 40px 0 20px 0; margin-top: 50px; }
        .footer-content { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .footer-contact h3 { font-size: 1.5rem; margin-bottom: 20px; text-align: center; color: #FFD700; }
        .footer-contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .footer-contact-item { display: flex; align-items: flex-start; gap: 15px; text-align: left; }
        .footer-contact-item .contact-icon { font-size: 1.5rem; margin-top: 5px; flex-shrink: 0; }
        .footer-contact-item h4 { color: #FFD700; margin-bottom: 5px; font-size: 1rem; }
        .footer-contact-item p { margin: 0; font-size: 0.9rem; line-height: 1.4; }
        .contact-logo { width: 2rem; height: 2rem; object-fit: contain; }

        /* Responsive */
        @media (max-width: 1024px) {
            .page-title { font-size: 2.2rem; }
        }
        @media (max-width: 768px) {
            .header-container { flex-direction: column; gap: 20px; }
            .logo-section { flex-direction: column; gap: 15px; width: 100%; }
            .header-right { flex-direction: column; gap: 15px; width: 100%; }
            .government-logos { justify-content: center; gap: 20px; }
            .government-logos img { width: 60px; height: 60px; }
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
        <h1 class="page-title">Pencapaian Piagam Pelanggan</h1>
        <p class="page-subtitle">Laporan ringkas pencapaian dan keberhasilan perkhidmatan MDKM mengikut piagam pelanggan.</p>

        <!-- Optional hero image (letakkan imej laporan terkini di folder ini dan tukar src di bawah) -->
        <section class="achievement-hero">
            <img class="hero-image" src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 600'><rect width='1200' height='600' fill='%23fff176'/><text x='600' y='300' dominant-baseline='middle' text-anchor='middle' font-family='Segoe UI' font-size='28' fill='%23333'>Tempat Imej Laporan Pencapaian (gantikan dengan fail imej sebenar)</text></svg>" alt="Laporan Pencapaian MDKM (contoh)">
            <div class="hero-caption">Muat naik imej laporan terkini dan gantikan sumber imej di atas apabila tersedia.</div>
        </section>

        <!-- Jadual Pencapaian (contoh struktur, kemaskini angka mengikut laporan sebenar) -->
        <section class="section">
            <h2 class="section-title">Ringkasan Pencapaian Mengikut Fungsi</h2>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Fungsi/Perkhidmatan</th>
                            <th>Indikator Piagam</th>
                            <th>Sasaran</th>
                            <th>Pencapaian</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pentadbiran</td>
                            <td>Masa tindak balas aduan</td>
                            <td>95% dalam 3 hari bekerja</td>
                            <td>96%</td>
                            <td><span class="badge badge-success">Capai</span></td>
                        </tr>
                        <tr>
                            <td>Kejuruteraan</td>
                            <td>Penyelenggaraan lampu jalan</td>
                            <td>90% dibaiki dalam 7 hari</td>
                            <td>88%</td>
                            <td><span class="badge badge-warning">Hampir Capai</span></td>
                        </tr>
                        <tr>
                            <td>Kesihatan & Perkhidmatan Bandar</td>
                            <td>Kekerapan kutipan sisa pepejal</td>
                            <td>100% ikut jadual</td>
                            <td>99%</td>
                            <td><span class="badge badge-success">Capai</span></td>
                        </tr>
                        <tr>
                            <td>Kewangan</td>
                            <td>Tempoh proses bayaran balik</td>
                            <td>95% dalam 14 hari</td>
                            <td>97%</td>
                            <td><span class="badge badge-success">Capai</span></td>
                        </tr>
                        <tr>
                            <td>Penguatkuasaan</td>
                            <td>Ops penguatkuasaan berjadual</td>
                            <td>12 siri setahun</td>
                            <td>12</td>
                            <td><span class="badge badge-info">Mengikut Jadual</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Nota -->
        <section class="section">
            <h2 class="section-title">Nota</h2>
            <p>Data di atas ialah contoh susun atur. Sila kemas kini angka dan butiran mengikut laporan rasmi MDKM. Jika anda mempunyai imej jadual rasmi, gantikan imej contoh pada bahagian atas halaman ini.</p>
        </section>
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


