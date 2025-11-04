<?php
// RSS Feed Generator for News and Announcements
header('Content-Type: application/rss+xml; charset=utf-8');

$siteUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$feedUrl = $siteUrl . $_SERVER['REQUEST_URI'];
$siteName = "Majlis Daerah Kota Marudu";
$siteDescription = "Laman web rasmi Majlis Daerah Kota Marudu - Melayani Masyarakat dengan Dedikasi";

// Sample news items - Replace with database query in production
$newsItems = [
    [
        'title' => 'Program Pembangunan Infrastruktur 2024',
        'link' => $siteUrl . '/landingpage.php#berita',
        'description' => 'Majlis Daerah Kota Marudu melancarkan program pembangunan infrastruktur komprehensif untuk meningkatkan kualiti hidup penduduk.',
        'date' => '2024-01-15',
        'guid' => $siteUrl . '/news/1'
    ],
    [
        'title' => 'Sesi Dialog Masyarakat Bulanan',
        'link' => $siteUrl . '/landingpage.php#berita',
        'description' => 'Sesi dialog masyarakat bulanan akan diadakan untuk membincangkan isu-isu pembangunan dan perkhidmatan awam.',
        'date' => '2024-01-12',
        'guid' => $siteUrl . '/news/2'
    ],
    [
        'title' => 'Kempen Kebersihan Bandar',
        'link' => $siteUrl . '/landingpage.php#berita',
        'description' => 'Kempen kebersihan bandar dilancarkan dengan sasaran menjadikan Kota Marudu sebagai bandar yang bersih dan hijau.',
        'date' => '2024-01-10',
        'guid' => $siteUrl . '/news/3'
    ],
    [
        'title' => 'Penutupan Sementara Pejabat MDKM',
        'link' => $siteUrl . '/landingpage.php#pengumuman',
        'description' => 'Penutupan sementara pejabat MDKM untuk kerja-kerja penyelenggaraan.',
        'date' => '2024-01-18',
        'guid' => $siteUrl . '/announcement/1'
    ],
    [
        'title' => 'Perubahan Waktu Operasi Kaunter Perkhidmatan Awam',
        'link' => $siteUrl . '/landingpage.php#pengumuman',
        'description' => 'Perubahan waktu operasi kaunter perkhidmatan awam mulai bulan depan.',
        'date' => '2024-01-16',
        'guid' => $siteUrl . '/announcement/2'
    ]
];

function formatRSSDate($date) {
    return date('r', strtotime($date));
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo htmlspecialchars($siteName); ?></title>
        <link><?php echo htmlspecialchars($siteUrl); ?></link>
        <description><?php echo htmlspecialchars($siteDescription); ?></description>
        <language>ms-MY</language>
        <lastBuildDate><?php echo formatRSSDate(date('Y-m-d')); ?></lastBuildDate>
        <pubDate><?php echo formatRSSDate(date('Y-m-d')); ?></pubDate>
        <ttl>60</ttl>
        <atom:link href="<?php echo htmlspecialchars($feedUrl); ?>" rel="self" type="application/rss+xml"/>
        
        <?php foreach ($newsItems as $item): ?>
        <item>
            <title><?php echo htmlspecialchars($item['title']); ?></title>
            <link><?php echo htmlspecialchars($item['link']); ?></link>
            <description><?php echo htmlspecialchars($item['description']); ?></description>
            <pubDate><?php echo formatRSSDate($item['date']); ?></pubDate>
            <guid><?php echo htmlspecialchars($item['guid']); ?></guid>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>

