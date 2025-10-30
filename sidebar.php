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
                <li><a href="pentadbiran.php">Pentadbiran</a></li>
                <li><a href="kejuruteraan.php">Kejuruteraan</a></li>
                <li><a href="kesihatan-perkhidmatan-bandar.php">Kesihatan dan Perkhidmatan Bandar</a></li>
                <li><a href="kewangan.php">Kewangan</a></li>
                <li><a href="penguatkuasaan.php">Penguatkuasaan</a></li>
                <li><a href="pencapaian-piagam-pelanggan.php">Pencapaian Piagam Pelanggan</a></li>
            </ul>
        </li>
        <li class="has-submenu">
            <a href="galeri.php" class="submenu-toggle">Galeri <span class="submenu-arrow">▼</span></a>
            <ul class="submenu">
                <li><a href="galeri-keratan-akhbar.php">Keratan Akhbar</a></li>
                <li><a href="galeri-anugerah.php">Anugerah</a></li>
                <li><a href="galeri-video.php">Video</a></li>
                <li><a href="galeri-gambar.php">Gambar</a></li>
            </ul>
        </li>
        <li class="has-submenu">
            <a href="tempat-menarik.php" class="submenu-toggle">Tempat Menarik Kota Marudu <span class="submenu-arrow">▼</span></a>
            <ul class="submenu">
                <li><a href="tempat-menarik.php#panorama-paradise-resort">Panorama Paradise Resort</a></li>
                <li><a href="tempat-menarik.php#pantai-mendawang">Pantai Mendawang</a></li>
                <li><a href="tempat-menarik.php#sarangheyo-campground">Sarangheyo - Campground</a></li>
                <li><a href="tempat-menarik.php#teringai-beach-and-lodge">Teringai Beach and Lodge</a></li>
                <li><a href="tempat-menarik.php#pengapuyan-campsite">Pengapuyan Campsite</a></li>
                <li><a href="tempat-menarik.php#walai-tobilung">Walai Tobilung</a></li>
            </ul>
        </li>
            
        <li><a href="borang-maklum-balas.php">Borang Maklum Balas</a></li>
        <li><a href="hubungi-kami.php">Hubungi Kami</a></li>
        <li><a href="e-buletin.php">E-Buletin</a></li>
    </ul>
</nav>
