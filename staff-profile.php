<?php
// Staff Profile Page
$staffName = isset($_GET['name']) ? urldecode($_GET['name']) : '';

// Staff data - In production, this would come from a database
$staffMembers = [
    'ABDUL SANI ARSAT' => [
        'name' => 'ABDUL SANI ARSAT',
        'position' => 'Pengarah',
        'department' => 'Pentadbiran',
        'email' => 'abdulsani@mdkm.gov.my',
        'phone' => '088-123456',
        'extension' => '101',
        'location' => 'Pejabat Utama',
        'image' => 'images/ABDUL SANI ARSAT.jpg',
        'bio' => 'Berpengalaman lebih 20 tahun dalam pentadbiran awam. Komited untuk memberikan perkhidmatan terbaik kepada masyarakat Kota Marudu.'
    ],
    'DZULFIKRI BIN MOHD HAIRI' => [
        'name' => 'DZULFIKRI BIN MOHD HAIRI',
        'position' => 'Jurutera',
        'department' => 'Kejuruteraan',
        'email' => 'dzulfikri@mdkm.gov.my',
        'phone' => '088-123456',
        'extension' => '201',
        'location' => 'Bahagian Kejuruteraan',
        'image' => 'images/DZULFIKRI BIN MOHD HAIRI.jpg',
        'bio' => 'Jurutera bertauliah dengan pengkhususan dalam infrastruktur bandar dan pembangunan mampan.'
    ],
    'JOHNNY MAUSAI' => [
        'name' => 'JOHNNY MAUSAI',
        'position' => 'Pegawai Kewangan',
        'department' => 'Kewangan',
        'email' => 'johnny@mdkm.gov.my',
        'phone' => '088-123456',
        'extension' => '301',
        'location' => 'Bahagian Kewangan',
        'image' => 'images/JOHNNY MAUSAI.jpg',
        'bio' => 'Bertanggungjawab dalam pengurusan kewangan dan belanjawan MDKM.'
    ],
    'NANEY MARTINA LIMAN' => [
        'name' => 'NANEY MARTINA LIMAN',
        'position' => 'Pegawai Penguatkuasaan',
        'department' => 'Penguatkuasaan',
        'email' => 'naney@mdkm.gov.my',
        'phone' => '088-123456',
        'extension' => '401',
        'location' => 'Bahagian Penguatkuasaan',
        'image' => 'images/NANEY MARTINA LIMAN.jpg',
        'bio' => 'Menguruskan hal ehwal penguatkuasaan dan pematuhan undang-undang tempatan.'
    ],
    'PG MOHD ZHARIF PG RAMLEE' => [
        'name' => 'PG MOHD ZHARIF PG RAMLEE',
        'position' => 'Pegawai Pentadbiran',
        'department' => 'Pentadbiran',
        'email' => 'zharif@mdkm.gov.my',
        'phone' => '088-123456',
        'extension' => '102',
        'location' => 'Pejabat Utama',
        'image' => 'images/PG MOHD ZHARIF PG RAMLEE.jpg',
        'bio' => 'Menguruskan hal ehwal pentadbiran dan sokongan operasi pejabat.'
    ],
];

$staff = isset($staffMembers[$staffName]) ? $staffMembers[$staffName] : null;

if (!$staff) {
    header('Location: directori.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?php echo htmlspecialchars($staff['name']); ?> - MDKM</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; }
        .header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .main-content { max-width: 900px; margin: 30px auto; padding: 0 20px; }
        .back-link { display: inline-block; margin-bottom: 20px; color: #228B22; text-decoration: none; font-weight: 600; }
        .back-link:hover { text-decoration: underline; }
        .profile-card { background: white; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow: hidden; }
        .profile-header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 40px; text-align: center; }
        .profile-image { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 5px solid white; margin: 0 auto 20px; display: block; }
        .profile-name { font-size: 2rem; margin-bottom: 10px; }
        .profile-position { font-size: 1.2rem; opacity: 0.9; margin-bottom: 5px; }
        .profile-department { font-size: 1rem; opacity: 0.8; }
        .profile-body { padding: 40px; }
        .profile-section { margin-bottom: 30px; }
        .profile-section h3 { color: #228B22; margin-bottom: 15px; font-size: 1.3rem; border-bottom: 2px solid #FFD700; padding-bottom: 10px; }
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .info-item { display: flex; align-items: flex-start; gap: 15px; padding: 15px; background: #f8f9fa; border-radius: 8px; }
        .info-icon { font-size: 1.5rem; flex-shrink: 0; }
        .info-content h4 { color: #333; margin-bottom: 5px; }
        .info-content p { color: #666; margin: 0; }
        .bio-text { line-height: 1.8; color: #555; font-size: 1.05rem; }
        .contact-buttons { display: flex; gap: 15px; margin-top: 20px; flex-wrap: wrap; }
        .contact-btn { padding: 12px 25px; background: #228B22; color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: background 0.3s ease; }
        .contact-btn:hover { background: #32CD32; }
        .contact-btn.secondary { background: #FFD700; color: #228B22; }
        .contact-btn.secondary:hover { background: #FFA500; }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <header class="header">
        <div class="header-container">
            <?php include 'header-brand.php'; ?>
        </div>
    </header>

    <main class="main-content">
        <a href="directori.php" class="back-link">← Kembali ke Directori</a>

        <div class="profile-card">
            <div class="profile-header">
                <img src="<?php echo htmlspecialchars($staff['image']); ?>" 
                     alt="<?php echo htmlspecialchars($staff['name']); ?>" 
                     class="profile-image"
                     onerror="this.src='images/Logo_MDKM_1-removebg-preview.png';">
                <h1 class="profile-name"><?php echo htmlspecialchars($staff['name']); ?></h1>
                <div class="profile-position"><?php echo htmlspecialchars($staff['position']); ?></div>
                <div class="profile-department"><?php echo htmlspecialchars($staff['department']); ?></div>
            </div>

            <div class="profile-body">
                <div class="profile-section">
                    <h3>Maklumat Perhubungan</h3>
                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-icon">📧</div>
                            <div class="info-content">
                                <h4>Emel</h4>
                                <p><a href="mailto:<?php echo htmlspecialchars($staff['email']); ?>" style="color: #228B22;"><?php echo htmlspecialchars($staff['email']); ?></a></p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">📞</div>
                            <div class="info-content">
                                <h4>Telefon</h4>
                                <p><?php echo htmlspecialchars($staff['phone']); ?></p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">🔢</div>
                            <div class="info-content">
                                <h4>Sambungan</h4>
                                <p><?php echo htmlspecialchars($staff['extension']); ?></p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">📍</div>
                            <div class="info-content">
                                <h4>Lokasi</h4>
                                <p><?php echo htmlspecialchars($staff['location']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($staff['bio'])): ?>
                <div class="profile-section">
                    <h3>Profil</h3>
                    <p class="bio-text"><?php echo htmlspecialchars($staff['bio']); ?></p>
                </div>
                <?php endif; ?>

                <div class="contact-buttons">
                    <a href="mailto:<?php echo htmlspecialchars($staff['email']); ?>" class="contact-btn">📧 Hantar Emel</a>
                    <a href="tel:<?php echo htmlspecialchars($staff['phone']); ?>" class="contact-btn secondary">📞 Hubungi</a>
                    <a href="hubungi-kami.php" class="contact-btn secondary">📋 Borang Hubungi Kami</a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="sidebar.js"></script>
</body>
</html>

