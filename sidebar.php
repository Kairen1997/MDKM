<?php
// Sidebar component for MDKM website
?>
<!-- Sidebar Toggle Button -->
<button class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</button>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<nav class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h3>Menu Utama</h3>
    </div>
    <ul class="sidebar-menu">
        <li><a href="landingpage.php" class="active">Laman Utama</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li class="has-submenu">
            <a href="perkhidmatan.php" class="submenu-toggle">Perkhidmatan <span class="submenu-arrow">▼</span></a>
            <ul class="submenu">
                <li><a href="kejuruteraan.php">Kejuruteraan</a></li>
                <li><a href="kesihatan-perkhidmatan-bandar.php">Kesihatan dan Perkhidmatan Bandar</a></li>
                <li><a href="kewangan.php">Kewangan</a></li>
                <li><a href="pencapaian-piagam-pelanggan.php">Pencapaian Piagam Pelanggan</a></li>
                <li><a href="penguatkuasaan.php">Penguatkuasaan</a></li>
                <li><a href="pentadbiran.php">Pentadbiran</a></li>
            </ul>
        </li>
        <li class="has-submenu">
            <a href="galeri.php" class="submenu-toggle">Galeri <span class="submenu-arrow">▼</span></a>
            <ul class="submenu">
                <li><a href="galeri-anugerah.php">Anugerah</a></li>
                <li><a href="galeri-gambar.php">Gambar</a></li>
                <li><a href="galeri-keratan-akhbar.php">Keratan Akhbar</a></li>
                <li><a href="galeri-video.php">Video</a></li>
            </ul>
        </li>
        <li class="has-submenu">
            <a href="tempat-menarik.php" class="submenu-toggle">Tempat Menarik Kota Marudu <span class="submenu-arrow">▼</span></a>
            <ul class="submenu">
                <li><a href="air-terjun-hatob.php">Air Terjun Hatob</a></li>
				<li><a href="air-terjun-kokobuan.php">Air Terjun Kokobuan</a></li>
                <li><a href="gumagayo-river-park.php">Gumagayo River Park</a></li>
                <li><a href="kinabalu-park-sub-station-serinsim.php">Kinabalu Park Sub-Station Serinsim</a></li>
				<li><a href="mundan-hill.php">Mundan Hill</a></li>
                <li><a href="panorama-paradise-resort.php">Panorama Paradise Resort</a></li>
                <li><a href="pantai-mendawang.php">Pantai Mendawang</a></li>
				<li><a href="pangapuyan-campsite.php">Pengapuyan Campsite</a></li>
                <li><a href="sarangheyo-campground.php">Sarangheyo - Campground</a></li>
				<li><a href="teringai-beach-and-lodge.php">Teringai Beach and Lodge</a></li>
				<li><a href="walai-rabbit.php">Walai Rabbit</a></li>
				<li><a href="walai-tobilung.php">Walai Tobilung</a></li>
            </ul>
        </li>
            
        <li><a href="borang-maklum-balas.php">Borang Maklum Balas</a></li>
        <li><a href="hubungi-kami.php">Hubungi Kami</a></li>
        <li><a href="e-buletin.php">E-Buletin</a></li>
    </ul>
</nav>
