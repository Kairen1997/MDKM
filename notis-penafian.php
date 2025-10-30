<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notis Penafian - Majlis Daerah Kota Marudu</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa; }
        .header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: #fff; padding: 1rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
        .page-title { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0 20px; color: #fff; font-weight: 600; opacity: 0.95; }
        .main-content { max-width: 1200px; margin: 0 auto; padding: 30px 20px 50px 20px; }
        .section { background: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); padding: 24px; }
        .section-title { font-size: 1.8rem; color: #228B22; margin-bottom: 12px; padding-bottom: 10px; border-bottom: 3px solid #FFD700; }
        .section p { margin-bottom: 12px; }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <header class="header">
        <div class="header-container">
            <?php include 'header-brand.php'; ?>
        </div>
        <div class="page-title">Notis Penafian</div>
    </header>

    <main class="main-content">
        <section class="section">
            <h2 class="section-title">Notis Penafian</h2>
            <p>Segala maklumat yang dipaparkan di laman ini adalah untuk tujuan makluman umum. MDKM tidak akan bertanggungjawab ke atas sebarang kerugian atau kerosakan yang timbul daripada penggunaan maklumat di laman ini.</p>
            <p>Pautan ke laman pihak ketiga disediakan untuk kemudahan pengguna dan tidak menunjukkan pengendorsan oleh MDKM.</p>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>


