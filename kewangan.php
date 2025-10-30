<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kewangan - Majlis Daerah Kota Marudu</title>
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
            grid-template-columns: repeat(5, 1fr);
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
            font-size: 1.05rem;
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

        .unit .unit-tasks { counter-reset: task-counter; }

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
        .contact-logo { width: 2rem; height: 2rem; object-fit: contain; }

        .footer-copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .footer-copyright p {
            margin: 5px 0;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .units-container { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
            .header-container { flex-direction: column; gap: 20px; }
            .logo-section, .header-right { flex-direction: column; gap: 15px; width: 100%; }
            .government-logos { justify-content: center; gap: 20px; }
            .government-logos img { width: 60px; height: 60px; }
            .page-title { font-size: 2rem; }
            .org-chart { padding: 20px; }
            .units-container { grid-template-columns: 1fr; }
            .main-division { font-size: 1.1rem; padding: 20px; }
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
        <h1 class="page-title">Kewangan</h1>

        <div class="org-chart">
            <h2 class="org-title">Bahagian Kewangan</h2>

            <div class="main-division">BAHAGIAN KEWANGAN</div>

            <div class="units-container">
                <div class="unit">
                    <div class="unit-title">UNIT PELESENAN</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Memproses dan menerima semua jenis permohonan lesen termasuk permit</li>
                            <li class="task-item">Membuat pemeriksaan terhadap permohonan baru</li>
                            <li class="task-item">Membuat kawalan terhadap syarat-syarat bersama Bahagian Penguatkuasaan Majlis</li>
                        </ul>
                    </div>
                </div>

                <div class="unit">
                    <div class="unit-title">UNIT SEMAKAN</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Mengendali buku wang runcit</li>
                            <li class="task-item">Menyediakan anggaran hasil dan perbelanjaan</li>
                            <li class="task-item">Mengendali G.W.O</li>
                            <li class="task-item">Memproses baucar bayaran bagi projek Negeri dan Persekutuan</li>
                            <li class="task-item">Memproses tuntutan bantuan orang-orang daripada Kerajaan Negeri dan Persekutuan</li>
                        </ul>
                    </div>
                </div>

                <div class="unit">
                    <div class="unit-title">UNIT PEMBAYARAN AM</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Menyediakan penyata gaji bulanan kakitangan</li>
                            <li class="task-item">Menyediakan penyata bayaran dan mengemaskini buku daftar caruman</li>
                            <li class="task-item">Mengurus dan merekod kunci pendua bangunan dan kenderaan</li>
                        </ul>
                    </div>
                </div>

                <div class="unit">
                    <div class="unit-title">UNIT KUTIPAN</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Menjaga keselamatan wang pungutan hasil</li>
                            <li class="task-item">Bertanggungjawab ke atas Buku Daftar Pembayaran Cukai/Lesen dan Buku Daftar Tempahan Dewan/Bilik Gerakan</li>
                        </ul>
                    </div>
                </div>

                <div class="unit">
                    <div class="unit-title">UNIT TUNTUTAN DAN NOTIS</div>
                    <div class="unit-tasks">
                        <ul class="task-list">
                            <li class="task-item">Menyediakan bil semasa, makluman, permohonan bayaran ansuran, laporan prestasi tunggakan dan notis cukai pintu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>


