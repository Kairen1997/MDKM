<?php
// Shared site footer
?>
<footer class="footer">
	<style>
		/* Footer-specific styles (scoped to .footer) */
		.footer {
			background: linear-gradient(180deg, #2fb62f 0%, #2aae2a 100%);
			color: #ffffff;
			padding: 48px 24px 28px;
			margin-top: 32px;
		}
		.footer-content { max-width: 1200px; margin: 0 auto; }
		.footer h3 {
			margin: 0 0 28px 0;
			text-align: center;
			font-size: 28px;
			font-weight: 700;
			color: #ffd21a; /* gold/yellow like screenshot */
		}
		.footer h4 { margin: 0 0 10px 0; font-size: 18px; color: #ffd21a; }
		.footer p { margin: 0; line-height: 1.7; }
		.footer a { color: #ffffff; text-decoration: none; }
		.footer a:hover { text-decoration: underline; }
		.footer-contact-grid {
			display: grid;
			grid-template-columns: repeat(6, minmax(0, 1fr));
			gap: 28px;
		}
		.footer-contact-item { min-width: 0; }
		.footeropyright { margin-top: 36px; font-size: 14px; opacity: 0.95; }
		.footeropyright p { text-align: center; }
		/* Responsive columns */
		@media (max-width: 1200px) { .footer-contact-grid { grid-template-columns: repeat(3, 1fr); } }
		@media (max-width: 700px) { .footer-contact-grid { grid-template-columns: repeat(2, 1fr); } }
		@media (max-width: 420px) { .footer-contact-grid { grid-template-columns: 1fr; } }
	</style>
	<div class="footer-content">
		<div class="footer-contact">
			<h3>Hubungi Kami</h3>
			<div class="footer-contact-grid">
				<div class="footer-contact-item">
					<h4>Alamat</h4>
					<p>Jalan Utama, Kota Marudu<br>89100 Kota Marudu<br>Sabah, Malaysia</p>
				</div>
				<div class="footer-contact-item">
					<h4>Telefon</h4>
					<p>088-123456<br>088-123457</p>
				</div>
				<div class="footer-contact-item">
					<h4>Email</h4>
					<p>info@mdkm.gov.my<br>admin@mdkm.gov.my</p>
				</div>
				<div class="footer-contact-item">
					<h4>Waktu Operasi</h4>
					<p>Isnin - Jumaat<br>8:00 AM - 5:00 PM</p>
				</div>
				<div class="footer-contact-item">
					<h4>Facebook</h4>
					<p><a href="https://www.facebook.com/people/Majlis-Daerah-Kota-Marudu/100064592716263/" target="_blank" rel="noopener">Ikuti Kami di Facebook</a></p>
				</div>
				<div class="footer-contact-item">
					<h4>YouTube</h4>
					<p><a href="https://www.youtube.com/channel/UClqBIJh4U2HXOVfJqMoD2JA" target="_blank" rel="noopener">Ikuti Kami di YouTube</a></p>
				</div>
			</div>
		</div>
		<div class="footeropyright">
			<p>&copy; 2024 Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
		</div>
	</div>
</footer>
