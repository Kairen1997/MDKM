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
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="tempat-menarik.php">Tempat Menarik Kota Marudu</a></li>
        <li><a href="borang-maklum-balas.php">Borang Maklum Balas</a></li>
        <li><a href="hubungi-kami.php">Hubungi Kami</a></li>
        <li><a href="e-buletin.php">E-Buletin</a></li>
    </ul>
</nav>
