<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penguatkuasaan - Majlis Daerah Kota Marudu</title>
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
        .header-right { display: flex; align-items: center; gap: 20px; }
        .government-logos { display: flex; align-items: center; gap: 8px; }
        .government-logos img { width: 80px; height: 80px; object-fit: contain; filter: contrast(1.2) brightness(1.1); }
        .logo { display: flex; align-items: center; gap: 15px; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; }
        .logo-text h1 { font-size: 1.8rem; font-weight: bold; margin-bottom: 5px; }
        .logo-text p { font-size: 0.9rem; opacity: 0.9; }

        .nav-menu { display: flex; list-style: none; gap: 30px; }
        .nav-menu a { color: white; text-decoration: none; font-weight: 500; transition: color 0.3s ease; padding: 10px 15px; border-radius: 5px; }
        .nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

        /* Main Content */
        .main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .page-title { text-align: center; font-size: 2.5rem; color: #228B22; margin-bottom: 40px; padding-bottom: 20px; border-bottom: 3px solid #FFD700; }

        /* Org block */
        .org-chart { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .org-title { text-align: center; font-size: 2.2rem; color: #333; margin-bottom: 40px; font-weight: 800; letter-spacing: 0.5px; }
        .main-division { background: #fff; border: 2px solid #333; padding: 18px; border-radius: 8px; text-align: center; font-weight: 700; max-width: 420px; margin: 0 auto 30px auto; }

        .units-container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .unit { background: #fff; border: 2px solid #dfe3e6; border-radius: 10px; padding: 20px; }
        .unit-title { font-size: 1.05rem; font-weight: 800; text-transform: uppercase; text-align: center; padding: 10px; border: 2px solid #6c757d; border-radius: 8px; color: #2f3c48; background: #f8f9fa; }
        .unit-tasks { margin-top: 18px; border: 1px solid #e5e7eb; border-radius: 8px; padding: 18px; }
        .unit-tasks p { color: #444; line-height: 1.7; }

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
        @media (max-width: 1024px) { .units-container { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) {
            .header-container { flex-direction: column; gap: 20px; }
            .logo-section { flex-direction: column; gap: 15px; width: 100%; }
            .header-right { flex-direction: column; gap: 15px; width: 100%; }
            .government-logos { justify-content: center; gap: 20px; }
            .government-logos img { width: 60px; height: 60px; }
            .page-title { font-size: 2rem; }
            .org-chart { padding: 20px; }
            .units-container { grid-template-columns: 1fr; }
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
        <h1 class="page-title">Penguatkuasaan</h1>
        <div class="org-chart">
            <h2 class="org-title">Penguatkuasaan</h2>
            <div class="main-division">BAHAGIAN PENGUATKUASA</div>
            <div class="units-container">
                <div class="unit">
                    <div class="unit-title">UNIT ADUAN, PENTADBIRAN DAN LATIHAN</div>
                    <div class="unit-tasks">
                        <p>1. Mengurus segala tugasan berkaitan pengurusan dan pentadbiran bahagian Penguatkuasa seperti menerima aduan, rekod fail, notis, latihan dan lain-lain berkaitan urusan tadbir.</p>
                    </div>
                </div>
                <div class="unit">
                    <div class="unit-title">UNIT KAWALAN DAN SIASATAN</div>
                    <div class="unit-tasks">
                        <p>1. Memeriksa aduan, lesen dan lain-lain berkaitan, mengawal dan menyiasat segala aktiviti berkaitan fungsi Penguatkuasaan. Melakukan lain-lain tugas berkaitan yang diarahkan dari semasa ke semasa.</p>
                    </div>
                </div>
                <div class="unit">
                    <div class="unit-title">UNIT TINDAKAN DAN OPERASI</div>
                    <div class="unit-tasks">
                        <p>1. Mengambil tindakan kepada mana-mana perkara berkaitan Penguatkuasaan, merancang dan melaksanakan tindakan operasi serta melaksanakan lain-lain tugasan yang diarahkan dari semasa ke semasa.</p>
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


