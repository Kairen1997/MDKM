<?php
// Shared header brand block (government logos + MDKM logo and text)
?>
<style>
/* Header Brand – District Office styling */
.logo-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    padding: 16px 0;
    font-family: "Segoe UI", Roboto, Arial, sans-serif;
}

.government-logos {
    display: flex;
    align-items: center;
    gap: 16px;
}

.government-logos img {
    height: 56px;
    width: auto;
    filter: saturate(0.9) contrast(1.05);
}

.logo {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-left: auto;
}

.logo-img {
    height: 72px;
    width: auto;
}

.logo-text h1 {
    margin: 0;
    font-size: 36px;
    line-height: 1.2;
    font-weight: 700;
    color: #0f172a;
    letter-spacing: 0.3px;
}

.logo-text p {
    margin: 4px 0 0;
    font-size: 16px;
    line-height: 1.5;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 600;
}

@media (max-width: 768px) {
    .logo-section {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }
    .government-logos img {
        height: 44px;
    }
    .logo-img {
        height: 60px;
    }
    .logo-text h1 {
        font-size: 28px;
    }
    .logo-text p {
        font-size: 14px;
    }
}
</style>
<div class="logo-section">
	<div class="government-logos">
		<img src="images/Jata_Negara-removebg-preview.png" alt="Jata Negara Malaysia" title="Jata Negara Malaysia">
		<img src="images/Jata_Wilayah_Sabah-removebg-preview.png" alt="Jata Wilayah Sabah" title="Jata Wilayah Sabah">
		<img src="images/Logo_MDKM_1-removebg-preview.png" alt="Majlis Daerah Kota Marudu" class="logo-img" title="Majlis Daerah Kota Marudu">
	</div>
	<div class="logo">
		<div class="logo-text">
			<h1>Majlis Daerah Kota Marudu</h1>
			<p style="color:#fff">Melayani Masyarakat dengan Dedikasi</p>
		</div>
	</div>
</div>


