<?php
// Shared site footer
?>
<footer class="footer">
	<style>
		/* Footer-specific styles (scoped to .footer) */
		.footer {
			background: linear-gradient(180deg, #2fb62f 0%, #2aae2a 100%);
			color: #ffffff;
			padding: 20px 20px 18px;
			margin-top: 16px;
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
			grid-template-columns: repeat(4, minmax(220px, 1fr));
			gap: 28px;
		}
		.footer-contact-item { min-width: 0; }
		.footer-contact-item h4 { font-weight: 700; letter-spacing: .2px; }
		.footer-contact-item p { opacity: .95; }
		.footeropyright { margin-top: 36px; font-size: 14px; opacity: 0.95; display: flex; align-items: center; justify-content: center; gap: 12px; }
		.footeropyright p { margin: 0; text-align: center; }
		.footer-logo { display: inline-block; max-height: 56px; height: auto; width: auto; }
		/* Responsive columns */
		@media (max-width: 1200px) { .footer-contact-grid { grid-template-columns: repeat(2, minmax(220px, 1fr)); } }
		@media (max-width: 700px) { .footer-contact-grid { grid-template-columns: 1fr; } }
		@media (max-width: 420px) { .footer-contact-grid { grid-template-columns: 1fr; } }
	</style>
	<div class="footer-content">
		<!-- Contact block removed: info exists in sidebar -->
		<div class="footeropyright">
			<img class="footer-logo" src="images/SMJ_Logo-removebg-preview.png" alt="SMJ logo" loading="lazy" />
			<p>&copy; 2024 Majlis Daerah Kota Marudu. Hak Cipta Terpelihara.</p>
		</div>
	</div>
</footer>
