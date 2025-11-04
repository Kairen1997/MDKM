<?php
// Translation System
// Load language preference before any output

// Safe session handling
$canSendHeaders = !headers_sent();
if (session_status() === PHP_SESSION_NONE && $canSendHeaders) {
    @session_start();
}

if (session_status() === PHP_SESSION_ACTIVE) {
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'ms'; // Default to Malay
    }

    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'] === 'en' ? 'en' : 'ms';
    }

    $lang = $_SESSION['lang'];
} else {
    // Fallback if session cannot be started
    $lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'ms';
}

// Translation arrays
$translations = [
    'ms' => [
        'title' => 'Majlis Daerah Kota Marudu - Laman Utama',
        'welcome' => 'Selamat Datang ke Majlis Daerah Kota Marudu',
        'welcome_desc' => 'Komitmen kami untuk memberikan perkhidmatan terbaik kepada masyarakat Kota Marudu dan memastikan pembangunan yang mampan dan inklusif.',
        'berita_terkini' => 'Berita Terkini',
        'aktiviti_program' => 'Aktiviti & Program',
        'pengumuman_penting' => 'Pengumuman Penting',
        'perkhidmatan_kami' => 'Perkhidmatan Kami',
        'pautan_pantas' => 'Pautan Pantas',
        'baca_selanjutnya' => 'Baca Selanjutnya',
        'daftar_sekarang' => 'Daftar Sekarang',
        'maklumat_lanjut' => 'Maklumat Lanjut',
        'jadual_acara' => 'Jadual Acara',
        'lihat_semua_pengumuman' => 'Lihat Semua Pengumuman',
        'beranda' => 'Beranda',
        'berita' => 'Berita',
        'pengumuman' => 'Pengumuman',
        'aktiviti' => 'Aktiviti',
        'perkhidmatan' => 'Perkhidmatan',
        'news_1_title' => 'Program Pembangunan Infrastruktur 2024',
        'news_1_date' => '15 Januari 2024',
        'news_1_excerpt' => 'Majlis Daerah Kota Marudu melancarkan program pembangunan infrastruktur komprehensif untuk meningkatkan kualiti hidup penduduk...',
        'news_2_title' => 'Sesi Dialog Masyarakat Bulanan',
        'news_2_date' => '12 Januari 2024',
        'news_2_excerpt' => 'Sesi dialog masyarakat bulanan akan diadakan untuk membincangkan isu-isu pembangunan dan perkhidmatan awam...',
        'news_3_title' => 'Kempen Kebersihan Bandar',
        'news_3_date' => '10 Januari 2024',
        'news_3_excerpt' => 'Kempen kebersihan bandar dilancarkan dengan sasaran menjadikan Kota Marudu sebagai bandar yang bersih dan hijau...',
        'activity_1_title' => 'Program Latihan Kemahiran',
        'activity_1_date' => '20 Januari 2024',
        'activity_1_excerpt' => 'Program latihan kemahiran untuk belia dan wanita dalam pelbagai bidang seperti teknologi, perniagaan dan kraftangan...',
        'activity_2_title' => 'Karnival Sukan Komuniti',
        'activity_2_date' => '25 Januari 2024',
        'activity_2_excerpt' => 'Karnival sukan komuniti akan diadakan di Stadium Mini Kota Marudu dengan pelbagai acara sukan dan pertandingan...',
        'activity_3_title' => 'Festival Budaya & Seni',
        'activity_3_date' => '30 Januari 2024',
        'activity_3_excerpt' => 'Festival budaya dan seni menampilkan keunikan budaya tempatan dengan persembahan tradisional dan pameran seni...',
        'announcement_1' => 'Penutupan Sementara Pejabat MDKM untuk Kerja-kerja Penyelenggaraan',
        'announcement_2' => 'Perubahan Waktu Operasi Kaunter Perkhidmatan Awam',
        'announcement_3' => 'Pemberitahuan Cukai Taksiran 2024 - Tarikh Akhir Bayaran',
        'announcement_4' => 'Program Bantuan Kewangan untuk Usahawan Kecil dan Sederhana',
        'announcement_5' => 'Jadual Pengumpulan Sampah Sempena Cuti Umum',
        'service_1_title' => 'Perkhidmatan Awam',
        'service_1_desc' => 'Pendaftaran, lesen perniagaan, permit pembinaan, dan pelbagai perkhidmatan awam yang lain.',
        'service_2_title' => 'Pembangunan Bandar',
        'service_2_desc' => 'Perancangan pembangunan, pengurusan infrastruktur, dan penyelenggaraan kemudahan awam.',
        'service_3_title' => 'Perkhidmatan Sosial',
        'service_3_desc' => 'Bantuan kewangan, program komuniti, dan perkhidmatan sokongan untuk masyarakat.',
        'cuaca_semasa' => 'Cuaca Semasa',
        'memuatkan_cuaca' => 'Memuatkan cuaca...',
        'kelembapan' => 'Kelembapan',
        'angin' => 'Angin',
        'km_j' => 'km/j',
        'weather_error' => 'Tidak dapat memuatkan data cuaca.',
        'weather_error_detail' => 'Sila cuba lagi kemudian atau periksa sambungan internet anda.',
    ],
    'en' => [
        'title' => 'Kota Marudu District Council - Home',
        'welcome' => 'Welcome to Kota Marudu District Council',
        'welcome_desc' => 'Our commitment to providing the best services to the people of Kota Marudu and ensuring sustainable and inclusive development.',
        'berita_terkini' => 'Latest News',
        'aktiviti_program' => 'Activities & Programs',
        'pengumuman_penting' => 'Important Announcements',
        'perkhidmatan_kami' => 'Our Services',
        'pautan_pantas' => 'Quick Links',
        'baca_selanjutnya' => 'Read More',
        'daftar_sekarang' => 'Register Now',
        'maklumat_lanjut' => 'More Information',
        'jadual_acara' => 'Event Schedule',
        'lihat_semua_pengumuman' => 'View All Announcements',
        'beranda' => 'Home',
        'berita' => 'News',
        'pengumuman' => 'Announcements',
        'aktiviti' => 'Activities',
        'perkhidmatan' => 'Services',
        'news_1_title' => 'Infrastructure Development Program 2024',
        'news_1_date' => 'January 15, 2024',
        'news_1_excerpt' => 'Kota Marudu District Council launches a comprehensive infrastructure development program to improve the quality of life for residents...',
        'news_2_title' => 'Monthly Community Dialogue Session',
        'news_2_date' => 'January 12, 2024',
        'news_2_excerpt' => 'Monthly community dialogue sessions will be held to discuss development issues and public services...',
        'news_3_title' => 'City Cleanliness Campaign',
        'news_3_date' => 'January 10, 2024',
        'news_3_excerpt' => 'City cleanliness campaign launched with the goal of making Kota Marudu a clean and green city...',
        'activity_1_title' => 'Skills Training Program',
        'activity_1_date' => 'January 20, 2024',
        'activity_1_excerpt' => 'Skills training program for youth and women in various fields such as technology, business and handicrafts...',
        'activity_2_title' => 'Community Sports Carnival',
        'activity_2_date' => 'January 25, 2024',
        'activity_2_excerpt' => 'Community sports carnival will be held at Kota Marudu Mini Stadium with various sports events and competitions...',
        'activity_3_title' => 'Culture & Arts Festival',
        'activity_3_date' => 'January 30, 2024',
        'activity_3_excerpt' => 'Culture and arts festival showcasing local cultural uniqueness with traditional performances and art exhibitions...',
        'announcement_1' => 'Temporary Closure of MDKM Office for Maintenance Work',
        'announcement_2' => 'Change in Public Service Counter Operating Hours',
        'announcement_3' => '2024 Assessment Tax Notice - Payment Deadline',
        'announcement_4' => 'Financial Assistance Program for Small and Medium Entrepreneurs',
        'announcement_5' => 'Waste Collection Schedule During Public Holidays',
        'service_1_title' => 'Public Services',
        'service_1_desc' => 'Registration, business licenses, construction permits, and various other public services.',
        'service_2_title' => 'Urban Development',
        'service_2_desc' => 'Development planning, infrastructure management, and maintenance of public facilities.',
        'service_3_title' => 'Social Services',
        'service_3_desc' => 'Financial assistance, community programs, and support services for the community.',
        'cuaca_semasa' => 'Current Weather',
        'memuatkan_cuaca' => 'Loading weather...',
        'kelembapan' => 'Humidity',
        'angin' => 'Wind',
        'km_j' => 'km/h',
        'weather_error' => 'Unable to load weather data.',
        'weather_error_detail' => 'Please try again later or check your internet connection.',
    ]
];

// Translation function
function t($key, $default = '') {
    global $translations, $lang;
    if (isset($translations[$lang][$key])) {
        return $translations[$lang][$key];
    }
    return $default !== '' ? $default : $key;
}

// Set HTML lang attribute
$htmlLang = $lang;

