<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Directori - Majlis Daerah Kota Marudu</title>
	<link rel="stylesheet" href="sidebar.css">
	<style>
		* { margin: 0; padding: 0; box-sizing: border-box; }
		body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa; }

		.header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
		.header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
		.nav-menu { display: flex; list-style: none; gap: 30px; }
		.nav-menu a { color: white; text-decoration: none; font-weight: 500; padding: 10px 15px; border-radius: 5px; }
		.nav-menu a:hover { background-color: rgba(255,255,255,0.1); }

		.main-content { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
		.page-title { text-align: left; font-size: 2.2rem; color: #2c3e50; margin-bottom: 20px; font-weight: 800; }
		.section { background: #fff; border-radius: 10px; padding: 24px; border: 1px solid #e9ecef; box-shadow: 0 6px 18px rgba(0,0,0,0.06); }
		.section + .section { margin-top: 20px; }

		.search-row { display: grid; grid-template-columns: 1fr 200px; gap: 12px; margin-bottom: 16px; }
		.search-input { width: 100%; padding: 12px 14px; border: 1px solid #cfd8dc; border-radius: 8px; font-size: 15px; }
		.filter-select { width: 100%; padding: 12px 14px; border: 1px solid #cfd8dc; border-radius: 8px; font-size: 15px; background: #fff; }

		.table-wrap { width: 100%; overflow-x: auto; }
		.schedule-table { width: 100%; border-collapse: collapse; font-size: 15px; }
		.schedule-table thead th { text-align: left; background: #f6f9f6; color: #2c3e50; border-bottom: 2px solid #e2e8f0; padding: 12px; }
		.schedule-table tbody td { border-bottom: 1px solid #eef2f6; padding: 12px; vertical-align: top; }
		.avatar { width: 48px; height: 48px; border-radius: 50%; object-fit: cover; border: 1px solid #e2e8f0; background: #fff; }
		.schedule-table tbody tr:hover { background: #f9fffa; }
		.badge { display: inline-block; padding: 4px 10px; border-radius: 999px; background: #e6ffe6; color: #2f5132; font-size: 12px; border: 1px solid #b5e7b5; }

		.pagination { display: flex; gap: 8px; align-items: center; justify-content: flex-end; margin-top: 12px; flex-wrap: wrap; }
		.page-btn { border: 1px solid #cfd8dc; background: #fff; padding: 6px 10px; border-radius: 6px; cursor: pointer; color: #334155; }
		.page-btn[disabled] { opacity: 0.5; cursor: default; }
		.page-btn.active { background: #e6ffe6; border-color: #b5e7b5; color: #14532d; }

		@media (max-width: 640px) { .search-row { grid-template-columns: 1fr; } }
	</style>
</head>
<body>
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
		<h1 class="page-title">Directori</h1>
		<section class="section" aria-label="Carian Jadual Directori">
			<div class="search-row">
				<input type="text" id="directorySearch" class="search-input" placeholder="Cari nama, jawatan atau bahagian...">
				<select id="departmentFilter" class="filter-select">
					<option value="">Semua Bahagian</option>
					<option value="pentadbiran">Pentadbiran</option>
					<option value="kejuruteraan">Kejuruteraan</option>
					<option value="kewangan">Kewangan</option>
					<option value="penguatkuasaan">Penguatkuasaan</option>
				</select>
			</div>
			<div class="table-wrap">
				<table class="schedule-table" id="directoryTable">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Nama & Jawatan</th>
							<th>Bahagian</th>
							<th>Lokasi</th>
							<th>Hubungi</th>
						</tr>
					</thead>
					<tbody id="directoryList">
						<tr data-name="ABDUL SANI ARSAT" data-role="-" data-dept="pentadbiran">
							<td><img class="avatar" src="images/ABDUL SANI ARSAT.jpg" alt="ABDUL SANI ARSAT" onerror="this.onerror=null;this.src='images/Logo_MDKM_1-removebg-preview.png';"></td>
							<td>
								<strong>ABDUL SANI ARSAT</strong><br>
								<span>-</span>
							</td>
							<td><span class="badge">Pentadbiran</span></td>
							<td>-</td>
							<td>
								emel: -<br>
								telefon: -<br>
								sambungan: -
							</td>
						</tr>
						<tr data-name="DZULFIKRI BIN MOHD HAIRI" data-role="-" data-dept="kejuruteraan">
							<td><img class="avatar" src="images/DZULFIKRI BIN MOHD HAIRI.jpg" alt="DZULFIKRI BIN MOHD HAIRI" onerror="this.onerror=null;this.src='images/Logo_MDKM_1-removebg-preview.png';"></td>
							<td>
								<strong>DZULFIKRI BIN MOHD HAIRI</strong><br>
								<span>-</span>
							</td>
							<td><span class="badge">Kejuruteraan</span></td>
							<td>-</td>
							<td>
								emel: -<br>
								telefon: -<br>
								sambungan: -
							</td>
						</tr>
						<tr data-name="JOHNNY MAUSAI" data-role="-" data-dept="kewangan">
							<td><img class="avatar" src="images/JOHNNY MAUSAI.jpg" alt="JOHNNY MAUSAI" onerror="this.onerror=null;this.src='images/Logo_MDKM_1-removebg-preview.png';"></td>
							<td>
								<strong>JOHNNY MAUSAI</strong><br>
								<span>-</span>
							</td>
							<td><span class="badge">Kewangan</span></td>
							<td>-</td>
							<td>
								emel: -<br>
								telefon: -<br>
								sambungan: -
							</td>
						</tr>
						<tr data-name="NANEY MARTINA LIMAN" data-role="-" data-dept="penguatkuasaan">
							<td><img class="avatar" src="images/NANEY MARTINA LIMAN.jpg" alt="NANEY MARTINA LIMAN" onerror="this.onerror=null;this.src='images/Logo_MDKM_1-removebg-preview.png';"></td>
							<td>
								<strong>NANEY MARTINA LIMAN</strong><br>
								<span>-</span>
							</td>
							<td><span class="badge">Penguatkuasaan</span></td>
							<td>-</td>
							<td>
								emel: -<br>
								telefon: -<br>
								sambungan: -
							</td>
						</tr>
						<tr data-name="PG MOHD ZHARIF PG RAMLEE" data-role="-" data-dept="pentadbiran">
							<td><img class="avatar" src="images/PG MOHD ZHARIF PG RAMLEE.jpg" alt="PG MOHD ZHARIF PG RAMLEE" onerror="this.onerror=null;this.src='images/Logo_MDKM_1-removebg-preview.png';"></td>
							<td>
								<strong>PG MOHD ZHARIF PG RAMLEE</strong><br>
								<span>-</span>
							</td>
							<td><span class="badge">Pentadbiran</span></td>
							<td>-</td>
							<td>
								emel: -<br>
								telefon: -<br>
								sambungan: -
							</td>
						</tr>
 
					</tbody>
				</table>
			</div>
			<div id="pagination" class="pagination" aria-label="Pagination"></div>
		</section>
	</main>

	<?php include 'footer.php'; ?>

	<script src="sidebar.js"></script>
	<script>
	(function() {
		var searchInput = document.getElementById('directorySearch');
		var deptSelect = document.getElementById('departmentFilter');
		var tbody = document.getElementById('directoryList');
		var pagination = document.getElementById('pagination');
		var currentPage = 1;
		var pageSize = 10;
		if (!searchInput || !deptSelect || !tbody) return;

		function normalise(text) { return (text || '').toLowerCase(); }

		function getAllRows() { return Array.prototype.slice.call(tbody.querySelectorAll('tr')); }

		function applyFilter() {
			var term = normalise(searchInput.value);
			var dept = deptSelect.value;
			var rows = getAllRows();
			rows.forEach(function(row) {
				var name = normalise(row.getAttribute('data-name'));
				var role = normalise(row.getAttribute('data-role'));
				var rdept = row.getAttribute('data-dept') || '';
				var matchText = !term || name.indexOf(term) > -1 || role.indexOf(term) > -1;
				var matchDept = !dept || rdept === dept;
				row.style.display = (matchText && matchDept) ? '' : 'none';
			});
			currentPage = 1;
			renderPage();
		}

		function getVisibleRows() {
			return getAllRows().filter(function(row) { return row.style.display !== 'none'; });
		}

		function renderPagination(totalPages) {
			if (!pagination) return;
			if (totalPages <= 1) { pagination.innerHTML = ''; return; }
			var html = '';
			html += '<button class="page-btn" id="prevPage" ' + (currentPage === 1 ? 'disabled' : '') + '>Sebelumnya</button>';
			for (var i = 1; i <= totalPages; i++) {
				html += '<button class="page-btn' + (i === currentPage ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
			}
			html += '<button class="page-btn" id="nextPage" ' + (currentPage === totalPages ? 'disabled' : '') + '>Seterusnya</button>';
			pagination.innerHTML = html;

			var prev = document.getElementById('prevPage');
			var next = document.getElementById('nextPage');
			if (prev) prev.addEventListener('click', function(){ if (currentPage > 1) { currentPage--; renderPage(); }});
			if (next) next.addEventListener('click', function(){ if (currentPage < totalPages) { currentPage++; renderPage(); }});
			Array.prototype.forEach.call(pagination.querySelectorAll('[data-page]'), function(btn) {
				btn.addEventListener('click', function(){ currentPage = parseInt(btn.getAttribute('data-page')); renderPage(); });
			});
		}

		function renderPage() {
			var visible = getVisibleRows();
			var total = visible.length;
			var totalPages = Math.max(1, Math.ceil(total / pageSize));
			if (currentPage > totalPages) currentPage = totalPages;

			// hide all visible first
			getAllRows().forEach(function(row) { if (row.style.display !== 'none') row.style.display = ''; });

			// show only current page among currently visible rows
			visible.forEach(function(row, index) {
				var start = (currentPage - 1) * pageSize;
				var end = start + pageSize;
				row.style.display = (index >= start && index < end) ? '' : 'none';
			});

			renderPagination(totalPages);
		}

		searchInput.addEventListener('input', applyFilter);
		deptSelect.addEventListener('change', applyFilter);

		// initial
		applyFilter();
	})();
	</script>
</body>
</html>


