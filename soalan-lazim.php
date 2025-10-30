<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soalan Lazim (FAQ) - Majlis Daerah Kota Marudu</title>
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
        .faq { margin-top: 8px; }
        .faq-item { margin-bottom: 12px; border-radius: 8px; overflow: hidden; background: #f9fafb; border: 1px solid #e5e7eb; }
        .faq-item summary { cursor: pointer; list-style: none; padding: 12px 14px; font-weight: 600; color: #0f172a; display: flex; align-items: center; justify-content: space-between; }
        .faq-item summary::-webkit-details-marker { display: none; }
        .faq-item[open] summary { background: #eef6ee; }
        .faq-item .answer { padding: 12px 14px; border-top: 1px solid #e5e7eb; color: #334155; }
        .faq-item ol { margin-left: 18px; margin-top: 6px; }
        .caret { margin-left: 10px; color: #228B22; }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <header class="header">
        <div class="header-container">
            <?php include 'header-brand.php'; ?>
        </div>
        <div class="page-title">Soalan Lazim (FAQ)</div>
    </header>

    <main class="main-content">
        <section class="section">
            <h2 class="section-title">Soalan Lazim</h2>
            <div class="faq">
                <details class="faq-item">
                    <summary>Bagaimana untuk menghubungi MDKM? <span class="caret">▾</span></summary>
                    <div class="answer">
                        <p>Sila rujuk halaman <a href="hubungi-kami.php">Hubungi Kami</a> untuk maklumat perhubungan.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Bagaimana cara menghantar maklum balas? <span class="caret">▾</span></summary>
                    <div class="answer">
                        <p>Anda boleh menggunakan <a href="borang-maklum-balas.php">Borang Maklum Balas</a> atas talian.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Soalan Lazim Mengenai Lesen Operasi MDKM — Bagaimanakan proses pengeluaran lesen? <span class="caret">▾</span></summary>
                    <div class="answer">
                        <p><strong>Jawapan:</strong></p>
                        <ol>
                            <li>Terima, semak borang dan daftar permohonan</li>
                            <li>Sediakan borang pemeriksaan kepada Bahagian Penguatkuasa, Bahagian kejuruteraan dan Bahagian Perkhidmatan Bandar dan Kesihatan</li>
                            <li>Hantar borang pemeriksaan kepada setiap bahagian yang terlibat</li>
                            <li>Buat lawatan dan pemeriksaan tapak premis</li>
                            <li>Sediakan laporan pemeriksaan tapak premis</li>
                            <li>Hantar laporan kepada Bahagian Kewangan – Unit Pelesenan</li>
                            <li>Hantar borang laporan kepada pegawai eksekutif untuk ulasan/komen</li>
                            <li>Hantar laporan kepada pembantu tadbir (Unit Pelesenan)</li>
                            <li>Sediakan agenda untuk dibawa dalam mesyuarat JKK Pelesenan</li>
                            <li>Bawa dalam mesyuarat JKK Pelesenan</li>
                            <li>Sediakan minit mesyuarat JKK Pelesenan</li>
                            <li>Hantar kepada pegawai eksekutif untuk semakan dan tandatangan</li>
                            <li>Hantar kepada Unit Failing untuk keratan minit</li>
                            <li>Hantar kepada Pegawai Eksekutif untuk tindakan</li>
                            <li>Semak dan beri arahan tindakan kepada pegawai yang berkenaan</li>
                            <li>Sediakan surat sokongan</li>
                            <li>Daftar surat keluar</li>
                            <li>Hantar surat kepada pemohon</li>
                            <li>Terima salinan surat kelulusan lesen daripada pemohon</li>
                            <li>Terima bayaran dan rekod</li>
                            <li>Keluarkan lesen kepada pemohon</li>
                        </ol>
                    </div>
                </details>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="sidebar.js"></script>
</body>
</html>


