<?php
// Shared header brand block (government logos + MDKM logo and text)

// Session-based visitor counter (safe: avoid starting session after headers sent)
$canSendHeaders = !headers_sent();
if (session_status() === PHP_SESSION_NONE && $canSendHeaders) {
    @session_start();
}

$counterFile = __DIR__ . DIRECTORY_SEPARATOR . 'counter.txt';
if (!file_exists($counterFile)) {
    @file_put_contents($counterFile, '0');
}

$visitorCount = 0;
$rawCount = @file_get_contents($counterFile);
if ($rawCount !== false) {
    $visitorCount = (int)$rawCount;
}

// Only increment when we have an active session (prevents duplicate counts and warnings)
if (session_status() === PHP_SESSION_ACTIVE && empty($_SESSION['mdkm_counted'])) {
    $visitorCount++;
    @file_put_contents($counterFile, (string)$visitorCount, LOCK_EX);
    $_SESSION['mdkm_counted'] = true;
}
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
    /* allow a right-side info box to occupy far-right */
    margin-left: 0;
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

/* Top-right info box: visitors + real-time date */
.header-info {
    margin-left: auto;
    display: flex;
    align-items: center;
    gap: 12px;
    text-align: right;
    font-size: 14px;
    color: #0f172a;
    white-space: nowrap;
}
.header-info .badge {
    background: #0ea5e9;
    color: #fff;
    padding: 4px 8px;
    border-radius: 999px;
    font-weight: 700;
}
.header-info .label { opacity: 0.9; }

@media (max-width: 768px) {
    .header-info {
        margin-left: 0;
        font-size: 13px;
        gap: 8px;
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
    <div class="header-info" aria-label="Maklumat Pengunjung dan Tarikh">
        <span class="label">Jumlah Pengunjung:</span>
        <span class="badge" id="visitorCount"><?php echo (int)$visitorCount; ?></span>
        <span class="label" aria-hidden="true">|</span>
        <span class="label">Tarikh:</span>
        <span id="currentDate" title="Tarikh masa nyata"></span>
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

// Real-time date (ms-MY locale)
(function(){
    function formatNow() {
        try {
            var now = new Date();
            return now.toLocaleString('ms-MY', {
                weekday: 'long', day: '2-digit', month: 'long', year: 'numeric',
                hour: '2-digit', minute: '2-digit', second: '2-digit'
            });
        } catch (e) {
            return new Date().toString();
        }
    }
    function tick() {
        var el = document.getElementById('currentDate');
        if (el) el.textContent = formatNow();
        var elNav = document.getElementById('currentDateNav');
        if (elNav) elNav.textContent = formatNow();
    }
    tick();
    setInterval(tick, 1000);
})();
</script>


