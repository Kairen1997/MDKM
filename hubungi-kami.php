<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: #fff;
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

        .page-title {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0 20px;
            color: #fff;
            font-weight: 600;
            opacity: 0.95;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px 50px 20px;
        }

        .section {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            padding: 24px;
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 1.8rem;
            color: #228B22;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 3px solid #FFD700;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .contact-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 18px;
        }

        .contact-card h4 {
            color: #228B22;
            margin-bottom: 8px;
        }

        .contact-card p {
            margin-bottom: 6px;
        }

        .map-wrapper {
            height: 360px;
            border-radius: 8px;
            overflow: hidden;
            background: #eaeaea;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background: #228B22;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.25s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover { background: #32CD32; }

        .btn-secondary {
            background: #FFD700;
            color: #228B22;
        }

        .btn-secondary:hover { background: #FFA500; }

        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 14px;
        }
    </style>
    
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <header class="header">
        <div class="header-container">
            <?php include 'header-brand.php'; ?>
        </div>
        <div class="page-title">Hubungi Kami</div>
    </header>

    <main class="main-content">
        <section class="section">
            <h2 class="section-title">Maklumat Perhubungan</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <h4>Alamat</h4>
                    <p>Majlis Daerah Kota Marudu</p>
                    <p>89100 Kota Marudu, Sabah</p>
                </div>
                <div class="contact-card">
                    <h4>Telefon & Faks</h4>
                    <p>Telefon: 088-000000</p>
                    <p>Faks: 088-000001</p>
                </div>
                <div class="contact-card">
                    <h4>E-mel</h4>
                    <p>admin@mdkm.gov.my</p>
                </div>
                <div class="contact-card">
                    <h4>Waktu Operasi</h4>
                    <p>Isnin - Jumaat: 8:00 pagi - 5:00 petang</p>
                    <p>Tutup pada Sabtu, Ahad & Cuti Umum</p>
                </div>
            </div>
            <div class="cta-row">
                <a href="borang-maklum-balas.php" class="btn">Hantar Maklum Balas</a>
                <a href="tel:088000000" class="btn btn-secondary">Telefon Sekarang</a>
                <a href="mailto:admin@mdkm.gov.my" class="btn btn-secondary">E-mel Kami</a>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Lokasi Kami</h2>
            <div class="map-wrapper">
                <!-- Gantikan src Google Maps embed ini dengan koordinat sebenar jika ada -->
                <iframe
                    title="Peta Lokasi MDKM"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.0!2d116.7!3d6.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNi41JTIwTiAxMTYuNyVFMiU4MCU5MCVFMiU4MCU5MA!5e0!3m2!1sms!2smy!4v1700000000000"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>


