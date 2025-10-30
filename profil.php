<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Majlis Daerah Kota Marudu</title>
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

        /* Section Styles */
        .section {
            background: white;
            margin-bottom: 30px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.8rem;
            color: #228B22;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #FFD700;
        }

        /* Functions Section */
        .functions-section {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .functions-text {
            flex: 1;
        }

        .functions-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .functions-illustration {
            flex: 0 0 200px;
            text-align: center;
        }

        .table-illustration {
            width: 150px;
            height: 120px;
            background: #f0f0f0;
            border: 2px solid #333;
            border-radius: 8px;
            position: relative;
            margin: 0 auto;
        }

        .table-illustration::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: #ddd;
            border-radius: 4px;
        }

        .table-illustration::after {
            content: '👥';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
        }

        /* Roles Section */
        .roles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .role-item {
            padding: 20px;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .role-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .role-item:nth-child(1) { background-color: #FF8C00; } /* Orange */
        .role-item:nth-child(2) { background-color: #87CEEB; } /* Light blue */
        .role-item:nth-child(3) { background-color: #DC143C; } /* Red */
        .role-item:nth-child(4) { background-color: #D3D3D3; color: #333; } /* Light gray */
        .role-item:nth-child(5) { background-color: #FFD700; color: #333; } /* Yellow */
        .role-item:nth-child(6) { background-color: #90EE90; color: #333; } /* Light green */
        .role-item:nth-child(7) { background-color: #87CEEB; } /* Light blue */
        .role-item:nth-child(8) { background-color: #DDA0DD; color: #333; } /* Light purple */
        .role-item:nth-child(9) { background-color: #FFB6C1; color: #333; } /* Pink */

        .role-number {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .role-text {
            font-size: 1rem;
            line-height: 1.4;
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

            .functions-section {
                flex-direction: column;
            }

            .functions-illustration {
                flex: none;
                order: -1;
            }

            .roles-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
			<?php include 'header-brand.php'; ?>
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
        <h1 class="page-title">Fungsi dan Peranan MDKM</h1>

        <!-- Functions Section -->
        <section class="section">
            <h2 class="section-title">Fungsi</h2>
            <div class="functions-section">
                <div class="functions-text">
                    <p>Melaksanakan segala fungsi Pihak Berkuasa Tempatan dalam menyediakan perkhidmatan kepada masyarakat dan pihak berkepentingan di dalam kawasan perkadaran Majlis Daerah Kota Marudu.</p>
                </div>
            </div>
        </section>

        <!-- Roles Section -->
        <section class="section">
            <h2 class="section-title">Peranan</h2>
            <div class="roles-grid">
                <div class="role-item">
                    <div>
                        <div class="role-number">1</div>
                        <div class="role-text">Memberi perkhidmatan bandar seperti pengutipan sampah dan pembersihan pekan.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">2</div>
                        <div class="role-text">Memberi perkhidmatan kesihatan seperti pasar, jalanraya, dewan orang ramai dan lain-lain.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">3</div>
                        <div class="role-text">Membina/menyelenggara kemudahan awam seperti pasar, jalanraya, dewan orang ramai dan lain-lain.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">4</div>
                        <div class="role-text">Memberi perkhidmatan dan layanan yang baik kepada setiap anggota masyarakat melalui perkhidmatan yang cekap dan berkesan.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">5</div>
                        <div class="role-text">Bertanggungjawab di atas perancangan kawasan dan pengawalan pembangunan.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">6</div>
                        <div class="role-text">Bertanggungjawab membuat dasar berkenaan dengan perancangan tanah dan bangunan di dalam kawasannya.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">7</div>
                        <div class="role-text">Merancang dan melaksanakan program-program pembangunan sosioekonomi dengan koordinasi.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">8</div>
                        <div class="role-text">Secara keseluruhannya fungsi/aktiviti bukan sahaja untuk memberi perkhidmatan yang berkesan tetapi juga untuk mempertingkatkan mutu kehidupan penduduk-penduduk dari segi kesihatan, perlindungan, kemudahan awan dan pembangunan masyarakat.</div>
                    </div>
                </div>
                
                <div class="role-item">
                    <div>
                        <div class="role-number">9</div>
                        <div class="role-text">Mengutip cukai kadaran dan lesen operasi.</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>
