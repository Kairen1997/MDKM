<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keratan Akhbar - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
        .logo-section { display: flex; align-items: center; gap: 10px; }
        .government-logos { display: flex; align-items: center; gap: 8px; }
        .government-logos img { width: 80px; height: 80px; object-fit: contain; filter: contrast(1.2) brightness(1.1); }
        .logo { display: flex; align-items: center; gap: 15px; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; }
        .logo-text h1 { font-size: 1.8rem; font-weight: bold; margin-bottom: 5px; }
        .logo-text p { font-size: 0.9rem; opacity: 0.9; }
        .nav-menu { display: flex; list-style: none; gap: 30px; }
        .nav-menu a { color: white; text-decoration: none; font-weight: 500; transition: color 0.3s ease; padding: 10px 15px; border-radius: 5px; }
        .nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

        /* Main */
        .main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .page-title { text-align: center; font-size: 2.5rem; color: #228B22; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 3px solid #FFD700; }

        .intro { text-align: center; color: #555; margin-bottom: 25px; }

        /* Cards */
        .news-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .news-card { background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08); display: flex; flex-direction: column; }
        .news-media { height: 180px; background: linear-gradient(45deg, #f0f0f0, #e0e0e0); display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #666; }
        .news-content { padding: 18px; display: flex; flex-direction: column; gap: 10px; }
        .news-title { font-size: 1.1rem; color: #228B22; font-weight: 700; }
        .news-date { color: #666; font-size: 0.9rem; }
        .news-excerpt { color: #555; }
        .btn { display: inline-block; padding: 10px 18px; background: #228B22; color: #fff; text-decoration: none; border-radius: 6px; width: fit-content; }
        .btn:hover { background: #32CD32; }

        /* Section wrapper */
        .section { background: white; margin-top: 30px; padding: 22px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        .section-title { font-size: 1.4rem; color: #228B22; margin-bottom: 10px; border-bottom: 3px solid #FFD700; padding-bottom: 8px; }

        /* Responsive */
        @media (max-width: 768px) {
            .header-container { flex-direction: column; gap: 20px; }
            .government-logos img, .logo-img { width: 60px; height: 60px; }
            .page-title { font-size: 2rem; }
        }
    </style>
    <meta property="og:title" content="Keratan Akhbar MDKM">
    <meta property="og:description" content="Himpunan berita dan liputan media berkaitan MDKM.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/Logo_MDKM_1-removebg-preview.png">
    <meta name="description" content="Keratan akhbar dan liputan media berkaitan Majlis Daerah Kota Marudu (MDKM).">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
			<?php include 'header-brand.php'; ?>
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

    <!-- Main -->
    <main class="main-content">
        <h1 class="page-title">Keratan Akhbar</h1>
        <p class="intro">Himpunan liputan media, berita dan artikel berkaitan Majlis Daerah Kota Marudu (MDKM).</p>

        <div class="news-grid">
            <article class="news-card">
                <div class="news-media">📰</div>
                <div class="news-content">
                    <h3 class="news-title">Majlis Angkat Sumpah Ahli Majlis Daerah Kota Marudu Sesi 2025–2027</h3>
                    <div class="news-date">Terbitan: Warta Oriental</div>
                    <p class="news-excerpt">Ahli-ahli majlis PBT digesa memainkan peranan lebih aktif dalam membantu memajukan daerah menerusi pelaksanaan tugas dan tanggungjawab yang berkesan.</p>
                    <a class="btn" href="#" aria-label="Baca keratan penuh">Baca Keratan</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-media">📣</div>
                <div class="news-content">
                    <h3 class="news-title">Program Bazaar Ramadhan MDKM bersama pemimpin dapat sambutan</h3>
                    <div class="news-date">Sumber: Facebook Sabah360 Online</div>
                    <p class="news-excerpt">Sebanyak 112 gerai membuka perniagaan pada tahun ini. MDKM bersama kepimpinan setempat meninjau gerai serta menyampaikan sumbangan kepada peniaga.</p>
                    <a class="btn" href="https://www.facebook.com/people/Majlis-Daerah-Kota-Marudu/100064592716263/" target="_blank" rel="noopener" aria-label="Baca di Facebook">Baca di Facebook</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-media">🏛️</div>
                <div class="news-content">
                    <h3 class="news-title">Inisiatif Peningkatan Perkhidmatan Bandar</h3>
                    <div class="news-date">Liputan Media Tempatan</div>
                    <p class="news-excerpt">Pelbagai usaha berterusan dilaksanakan bagi meningkatkan kebersihan, keselamatan dan kesejahteraan komuniti di Kota Marudu.</p>
                    <a class="btn" href="#" aria-label="Baca keratan penuh">Baca Keratan</a>
                </div>
            </article>
        </div>

        <section class="section" style="margin-top: 25px;">
            <h2 class="section-title">Ikuti Kemas Kini</h2>
            <p>Untuk berita terkini, sila ikuti halaman Facebook rasmi MDKM dan saluran YouTube melalui pautan pada bahagian bawah laman.</p>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>


