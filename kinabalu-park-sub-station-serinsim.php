<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinabalu Park Sub-Station Serinsim - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa; }

        .header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
        .logo-section { display: flex; align-items: center; gap: 10px; }
        .government-logos { display: flex; align-items: center; gap: 8px; }
        .government-logos img { width: 80px; height: 80px; object-fit: contain; flex-shrink: 0; filter: contrast(1.2) brightness(1.1); }
        .logo { display: flex; align-items: center; gap: 15px; }
        .logo-img { width: 80px; height: 80px; object-fit: contain; flex-shrink: 0; }
        .logo-text h1 { font-size: 1.8rem; font-weight: bold; margin-bottom: 5px; }
        .logo-text p { font-size: 0.9rem; opacity: 0.9; }
        .nav-menu { display: flex; list-style: none; gap: 30px; }
        .nav-menu a { color: white; text-decoration: none; font-weight: 500; padding: 10px 15px; border-radius: 5px; }
        .nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

        .main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .page-title { text-align: left; font-size: 3rem; color: #2c3e50; margin-bottom: 30px; font-weight: 800; }

        .intro-grid { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 40px; align-items: start; }
        .gallery { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
        .gallery figure { margin: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.08); border: 1px solid #e9ecef; }
        .gallery img { display: block; width: 100%; height: 220px; object-fit: cover; }
        .info-card { margin-top: 8px; background: #e6ffe6; border: 1px solid #b5e7b5; border-radius: 10px; padding: 16px; color: #2f5132; box-shadow: 0 4px 12px rgba(34,139,34,0.12); }

        .content-card { background: #ffffff; border-radius: 14px; padding: 28px; border: 1px solid #e9ecef; box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
        .content-card h2 { font-size: 1.6rem; color: #2c3e50; margin-bottom: 12px; }
        .content-card p { margin-bottom: 14px; color: #444; }
        .content-card ul { padding-left: 18px; }
        .content-card li { margin-bottom: 8px; }

        .map-card { background: #ffffff; border-radius: 14px; padding: 0; border: 1px solid #e9ecef; box-shadow: 0 8px 24px rgba(0,0,0,0.08); overflow: hidden; }
        .map-responsive { position: relative; width: 100%; padding-bottom: 40%; max-height: 320px; }
        .map-responsive iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }

        .footer { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 40px 0 20px 0; margin-top: 50px; }
        .footer-content { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        @media (max-width: 992px) { .intro-grid { grid-template-columns: 1fr; } .page-title { font-size: 2.4rem; text-align: center; } }
        @media (max-width: 600px) { .gallery img { height: 180px; } }
    </style>
    <meta name="description" content="Kinabalu Park Sub-Station Serinsim di Kota Marudu – pintu masuk rekreasi alam, denai hutan, dan kemudahan pelawat.">
</head>
<body>
    <?php include 'sidebar.php'; ?>

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

    <main class="main-content">
        <div class="page-title">Kinabalu Park Sub-Station Serinsim</div>

        <section class="intro-grid">
            <div>
                <div class="gallery">
                    <figure>
                        <img src="images/Serinsim 1.png" alt="Kinabalu Park Sub-Station Serinsim - kemudahan utama dan landskap hijau">
                    </figure>
                    <figure>
                        <img src="images/serinsim 2.png" alt="Kinabalu Park Sub-Station Serinsim - papan tanda dan laluan masuk">
                    </figure>
                </div>
                <div class="info-card">
                    <strong>Maklumat penting</strong><br>
                    Lokasi: Serinsim, Kota Marudu.<br>
                    Aktiviti: Trekking hutan, rekreasi alam, berkelah, fotografi.<br>
                    Waktu sesuai: Pagi & petang.
                </div>
            </div>

            <article class="content-card">
                <h2>Pengenalan</h2>
                <p>
                    Sub-Station Serinsim merupakan salah satu pintu masuk ke kawasan Taman Kinabalu
                    yang menampilkan kehijauan hutan tropika, aliran sungai yang jernih serta
                    suasana alam yang tenang. Lokasi ini sesuai untuk aktiviti riadah keluarga dan
                    pencinta alam semula jadi.
                </p>
                <ul>
                    <li>Denai hutan dan kawasan rekreasi yang terjaga</li>
                    <li>Persekitaran yang damai untuk berkelah dan bersantai</li>
                    <li>Spot fotografi landskap dan flora fauna</li>
                </ul>
                <p>
                    Pengunjung disaran mematuhi peraturan taman, menjaga kebersihan, dan mengutamakan
                    keselamatan semasa meneroka denai dan kawasan sungai.
                </p>
            </article>
        </section>

        <section class="map-card" aria-label="Lokasi di Google Maps">
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps?q=Kinabalu%20Park%20Sub-Station%20Serinsim%20Kota%20Marudu&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    title="Peta Kinabalu Park Sub-Station Serinsim">
                </iframe>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>
