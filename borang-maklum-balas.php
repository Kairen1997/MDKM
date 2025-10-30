<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Borang Maklum Balas - Majlis Daerah Kota Marudu</title>
	<link rel="stylesheet" href="sidebar.css">
	<style>
		* { margin: 0; padding: 0; box-sizing: border-box; }
		body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa; }

		.header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
		.header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
		.nav-menu { display: flex; list-style: none; gap: 30px; }
		.nav-menu a { color: white; text-decoration: none; font-weight: 500; padding: 10px 15px; border-radius: 5px; }
		.nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

		.main-content { max-width: 960px; margin: 0 auto; padding: 40px 20px; }
		.page-title { text-align: left; font-size: 2.4rem; color: #2c3e50; margin-bottom: 20px; font-weight: 800; }

		.form-card { background: #ffffff; border-radius: 14px; padding: 28px; border: 1px solid #e9ecef; box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
		.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
		.form-grid .full { grid-column: 1 / -1; }
		label { display: block; font-weight: 600; margin-bottom: 6px; color: #2c3e50; }
		input[type="text"], input[type="email"], input[type="tel"], select, textarea { width: 100%; padding: 12px 14px; border: 1px solid #cfd8dc; border-radius: 8px; background: #fff; color: #333; }
		textarea { min-height: 140px; resize: vertical; }
		.help { font-size: 0.85rem; color: #607d8b; margin-top: 6px; }

		.actions { margin-top: 16px; display: flex; gap: 10px; }
		.btn { display: inline-block; padding: 12px 18px; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; }
		.btn-primary { background: #228B22; color: #fff; }
		.btn-primary:hover { background: #1d7a1d; }
		.btn-secondary { background: #eceff1; color: #2c3e50; }

		.alert { padding: 12px 14px; border-radius: 8px; margin-bottom: 16px; }
		.alert-success { background: #e6ffe6; border: 1px solid #b5e7b5; color: #2f5132; }
		.alert-error { background: #ffebee; border: 1px solid #ffcdd2; color: #c62828; }

		@media (max-width: 768px) { .form-grid { grid-template-columns: 1fr; } .page-title { text-align: center; } }
	</style>
	<meta name="description" content="Borang maklum balas untuk Majlis Daerah Kota Marudu. Kongsi cadangan, pertanyaan, atau aduan anda.">
</head>
<body>
	<?php
		$successMessage = '';
		$errorMessage = '';
		$old = [ 'nama' => '', 'emel' => '', 'telefon' => '', 'kategori' => '', 'subjek' => '', 'mesej' => '', 'penilaian' => '' ];

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$nama = trim($_POST['nama'] ?? '');
			$emel = trim($_POST['emel'] ?? '');
			$telefon = trim($_POST['telefon'] ?? '');
			$kategori = trim($_POST['kategori'] ?? '');
			$subjek = trim($_POST['subjek'] ?? '');
			$mesej = trim($_POST['mesej'] ?? '');
			$penilaian = trim($_POST['penilaian'] ?? '');

			$old = [ 'nama' => $nama, 'emel' => $emel, 'telefon' => $telefon, 'kategori' => $kategori, 'subjek' => $subjek, 'mesej' => $mesej, 'penilaian' => $penilaian ];

			$errors = [];
			if ($nama === '') { $errors[] = 'Nama diperlukan.'; }
			if ($emel === '' || !filter_var($emel, FILTER_VALIDATE_EMAIL)) { $errors[] = 'Emel tidak sah.'; }
			if ($mesej === '') { $errors[] = 'Mesej diperlukan.'; }

			if (empty($errors)) {
				$dir = __DIR__;
				$file = $dir . DIRECTORY_SEPARATOR . 'feedback-submissions.csv';
				$firstWrite = !file_exists($file);
				$fp = @fopen($file, 'a');
				if ($fp) {
					if ($firstWrite) {
						fputcsv($fp, ['tarikh', 'nama', 'emel', 'telefon', 'kategori', 'subjek', 'penilaian', 'mesej']);
					}
					$now = date('Y-m-d H:i:s');
					$line = [$now, $nama, $emel, $telefon, $kategori, $subjek, $penilaian, preg_replace("/\r?\n/", ' ', $mesej)];
					flock($fp, LOCK_EX);
					fputcsv($fp, $line);
					flock($fp, LOCK_UN);
					fclose($fp);
					$successMessage = 'Terima kasih! Maklum balas anda telah diterima.';
					$old = [ 'nama' => '', 'emel' => '', 'telefon' => '', 'kategori' => '', 'subjek' => '', 'mesej' => '', 'penilaian' => '' ];
				} else {
					$errorMessage = 'Maaf, sistem tidak dapat menyimpan maklum balas buat masa ini.';
				}
			} else {
				$errorMessage = implode(' ', $errors);
			}
		}
	?>

	<?php include 'sidebar.php'; ?>

	<header class="header">
		<div class="header-container">
			<?php include 'header-brand.php'; ?>
			<nav>
				<ul class="nav-menu">
					<li><a href="landingpage.php">Beranda</a></li>
					<li><a href="landingpage.php#berita">Berita</a></li>
					<li><a href="landingpage.php#pengumuman">Pengumuman</a></li>
					<li><a href="landingpage.php#aktiviti">Aktiviti</a></li>
					<li><a href="landingpage.php#perkhidmatan">Perkhidmatan</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main class="main-content">
		<div class="page-title">Borang Maklum Balas</div>

		<section class="form-card">
			<?php if ($successMessage !== ''): ?>
				<div class="alert alert-success"><?= htmlspecialchars($successMessage) ?></div>
			<?php endif; ?>
			<?php if ($errorMessage !== ''): ?>
				<div class="alert alert-error"><?= htmlspecialchars($errorMessage) ?></div>
			<?php endif; ?>

			<form method="post" action="">
				<div class="form-grid">
					<div>
						<label for="nama">Nama Penuh *</label>
						<input type="text" id="nama" name="nama" required value="<?= htmlspecialchars($old['nama']) ?>">
					</div>
					<div>
						<label for="emel">Emel *</label>
						<input type="email" id="emel" name="emel" required value="<?= htmlspecialchars($old['emel']) ?>">
					</div>
					<div>
						<label for="telefon">No. Telefon</label>
						<input type="tel" id="telefon" name="telefon" placeholder="Contoh: 0123456789" value="<?= htmlspecialchars($old['telefon']) ?>">
						<p class="help">Opsyenal, untuk kami hubungi anda semula.</p>
					</div>
					<div>
						<label for="kategori">Kategori</label>
						<select id="kategori" name="kategori">
							<option value="">— Pilih —</option>
							<option value="Pertanyaan" <?= $old['kategori']==='Pertanyaan'?'selected':''; ?>>Pertanyaan</option>
							<option value="Cadangan" <?= $old['kategori']==='Cadangan'?'selected':''; ?>>Cadangan</option>
							<option value="Aduan" <?= $old['kategori']==='Aduan'?'selected':''; ?>>Aduan</option>
							<option value="Lain-lain" <?= $old['kategori']==='Lain-lain'?'selected':''; ?>>Lain-lain</option>
						</select>
					</div>
					<div class="full">
						<label for="subjek">Subjek</label>
						<input type="text" id="subjek" name="subjek" value="<?= htmlspecialchars($old['subjek']) ?>">
					</div>
					<div class="full">
						<label for="mesej">Mesej *</label>
						<textarea id="mesej" name="mesej" required><?= htmlspecialchars($old['mesej']) ?></textarea>
					</div>
					<div>
						<label for="penilaian">Penilaian</label>
						<select id="penilaian" name="penilaian">
							<option value="">— Pilih —</option>
							<option value="5" <?= $old['penilaian']==='5'?'selected':''; ?>>★★★★★ (Sangat Puas Hati)</option>
							<option value="4" <?= $old['penilaian']==='4'?'selected':''; ?>>★★★★☆</option>
							<option value="3" <?= $old['penilaian']==='3'?'selected':''; ?>>★★★☆☆</option>
							<option value="2" <?= $old['penilaian']==='2'?'selected':''; ?>>★★☆☆☆</option>
							<option value="1" <?= $old['penilaian']==='1'?'selected':''; ?>>★☆☆☆☆ (Tidak Puas Hati)</option>
						</select>
					</div>
				</div>
				<div class="actions">
					<button type="submit" class="btn btn-primary">Hantar</button>
					<button type="reset" class="btn btn-secondary">Set Semula</button>
				</div>
			</form>
		</section>
	</main>

	<footer class="footer">
		<?php include 'footer.php'; ?>
	</footer>

	<script src="sidebar.js"></script>
</body>
</html>


