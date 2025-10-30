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

/* Image Modal (Lightbox) */
.image-modal-overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100vw;
	height: 100vh;
	background: rgba(0, 0, 0, 0.8);
	display: none;
	align-items: center;
	justify-content: center;
	z-index: 9999;
}

.image-modal-content {
	max-width: 90vw;
	max-height: 90vh;
	box-shadow: 0 10px 30px rgba(0,0,0,0.5);
	border-radius: 8px;
	background: #000;
}

.image-modal-content img {
	display: block;
	max-width: 100%;
	max-height: 90vh;
	object-fit: contain;
}

.image-modal-close {
	position: absolute;
	top: 16px;
	right: 20px;
	color: #fff;
	font-size: 28px;
	line-height: 1;
	cursor: pointer;
	user-select: none;
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
			<h1><a href="landingpage.php" style="text-decoration:none; color:inherit;" title="Pergi ke Laman Utama">Majlis Daerah Kota Marudu</a></h1>
			<p style="color:#fff">Melayani Masyarakat dengan Dedikasi</p>
		</div>
	</div>
</div>

<!-- Image Modal Markup -->
<div class="image-modal-overlay" id="imageModal" aria-hidden="true" role="dialog">
	<span class="image-modal-close" id="imageModalClose" aria-label="Tutup">×</span>
	<div class="image-modal-content">
		<img src="" alt="Paparan Logo" id="imageModalImg">
	</div>
</div>

<script>
// Enable click-to-enlarge for all logos in the header
(function() {
	var selectableImages = document.querySelectorAll('.government-logos img, .logo .logo-img');
	var modal = document.getElementById('imageModal');
	var modalImg = document.getElementById('imageModalImg');
	var modalClose = document.getElementById('imageModalClose');

	if (!selectableImages.length || !modal || !modalImg) return;

	selectableImages.forEach(function(img) {
		img.style.cursor = 'zoom-in';
		img.addEventListener('click', function(e) {
			e.preventDefault();
			modalImg.src = img.getAttribute('src');
			modal.style.display = 'flex';
			modal.setAttribute('aria-hidden', 'false');
			document.body.style.overflow = 'hidden';
		});
	});

	function closeModal() {
		modal.style.display = 'none';
		modal.setAttribute('aria-hidden', 'true');
		modalImg.src = '';
		document.body.style.overflow = '';
	}

	modal.addEventListener('click', function(e) {
		if (e.target === modal) closeModal();
	});

	if (modalClose) {
		modalClose.addEventListener('click', closeModal);
	}

	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape') closeModal();
	});
})();
</script>


