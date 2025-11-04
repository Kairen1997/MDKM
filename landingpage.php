<?php include 'translations.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $htmlLang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo t('title'); ?></title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Place header info next to navigation on landing page */
        .header-right .header-info { 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            font-size: 14px; 
            white-space: nowrap; 
        }
        .header-right .header-info .badge { 
            background: #0ea5e9; 
            color: #fff; 
            padding: 4px 8px; 
            border-radius: 999px; 
            font-weight: 700; 
        }
        /* Hide the header-info rendered inside header-brand on landing page */
        .logo-section .header-info { display: none; }

        .social-links {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .social-link {
            display: inline-block;
            font-size: 1.5rem;
            text-decoration: none;
            padding: 8px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background-color: rgba(255,255,255,0.2);
            transform: scale(1.1);
        }

        .social-logo {
            width: 24px;
            height: 24px;
            object-fit: contain;
        }

        .contact-logo {
            width: 2rem;
            height: 2rem;
            object-fit: contain;
        }

        .government-logos {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .government-logos img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            flex-shrink: 0;
            filter: contrast(1.2) brightness(1.1);
        }

        .government-logos img:hover {
            opacity: 0.8;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .logo-text h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .logo-text p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 20px; /* tighter to fit within hero width */
            align-items: center;
            flex-wrap: nowrap;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 8px 14px; /* smaller to avoid wrapping */
            border-radius: 6px;
            line-height: 1.1; /* still comfortable */
            letter-spacing: 0.2px; /* subtle refinement */
            font-size: 0.95rem; /* fit within 1200px container */
        }

        /* Slightly reduce sizes on medium screens to keep one-line fit */
        @media (max-width: 1200px) {
            .nav-menu { gap: 16px; }
            .nav-menu a { padding: 8px 12px; font-size: 0.93rem; }
        }

        .nav-menu a:hover {
            background-color: rgba(255,255,255,0.1);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .hero-section {
            position: relative;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
        }

        .hero-slider {
            position: absolute;
            inset: 0;
        }

        .hero-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 900ms ease, transform 4800ms ease;
            will-change: opacity, transform;
        }

        .hero-slide.is-active {
            opacity: 1;
            transform: scale(1);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.35));
        }

        .hero-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Section Styles */
        .section {
            background: white;
            margin-bottom: 30px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.8rem;
            color: #228B22;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #FFD700;
        }

        /* Berita/Aktiviti Section */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .news-item {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .news-image {
            height: 200px;
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        .news-content {
            padding: 20px;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #228B22;
        }

        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .news-excerpt {
            color: #555;
            line-height: 1.5;
        }

        /* Pengumuman Section */
        .announcement-list {
            list-style: none;
        }

        .announcement-item {
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .announcement-item:last-child {
            border-bottom: none;
        }

        .announcement-title {
            font-weight: 600;
            color: #228B22;
            flex: 1;
        }

        .announcement-date {
            color: #666;
            font-size: 0.9rem;
            margin-left: 20px;
        }

        .announcement-item:hover {
            background-color: #f0fff0;
            padding-left: 10px;
            transition: all 0.3s ease;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .contact-item {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .contact-icon {
            font-size: 2rem;
            color: #228B22;
            margin-bottom: 15px;
        }

        .contact-item h4 {
            color: #228B22;
            margin-bottom: 10px;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 40px 0 20px 0;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-contact h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #FFD700;
        }

        .footer-contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-align: left;
        }

        .footer-contact-item .contact-icon {
            font-size: 1.5rem;
            margin-top: 5px;
            flex-shrink: 0;
        }

        .footer-contact-item h4 {
            color: #FFD700;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .footer-contact-item p {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .footer-copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .footer-copyright p {
            margin: 5px 0;
        }

        /* Pautan Pantas */
        .quick-links {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .quick-links h2.section-title { margin-bottom: 16px; }
        .quick-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
        }
        .quick-link {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 16px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }
        .quick-link a {
            display: block;
            width: 100%;
            text-decoration: none;
            color: #0f172a;
            font-weight: 700;
            padding: 14px 10px;
            border-radius: 8px;
            background: linear-gradient(135deg, #e0f2fe 0%, #d1fae5 100%);
        }
        .quick-link a:hover { filter: brightness(0.98); }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }

            .logo-section {
                flex-direction: column;
                gap: 15px;
                width: 100%;
            }

            .header-right {
                flex-direction: column;
                gap: 15px;
                width: 100%;
            }

            .social-links {
                justify-content: center;
            }

            .nav-menu {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .government-logos {
                justify-content: center;
                gap: 20px;
            }

            .government-logos img {
                width: 60px;
                height: 60px;
            }

            .hero-content h2 {
                font-size: 2rem;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .announcement-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .announcement-date {
                margin-left: 0;
            }
        }


        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #228B22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #32CD32;
        }

        .btn-secondary {
            background: #FFD700;
            color: #228B22;
        }

        .btn-secondary:hover {
            background: #FFA500;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <?php include 'language-switcher.php'; ?>
    <?php include 'social-share.php'; ?>
    <?php include 'chatbot.php'; ?>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
			<?php include 'header-brand.php'; ?>
            <div class="header-right">
                <nav>
                    <ul class="nav-menu">
                        <li><a href="#beranda"><?php echo t('beranda'); ?></a></li>
                        <li><a href="#berita"><?php echo t('berita'); ?></a></li>
                        <li><a href="#pengumuman"><?php echo t('pengumuman'); ?></a></li>
                        <li><a href="#aktiviti"><?php echo t('aktiviti'); ?></a></li>
                        <li><a href="#perkhidmatan"><?php echo t('perkhidmatan'); ?></a></li>
                    </ul>
                </nav>
                <div class="header-info" aria-label="Maklumat Pengunjung dan Tarikh">
                    <span class="label">Jumlah Pengunjung:</span>
                    <span class="badge" id="visitorCountNav"><?php echo isset($visitorCount) ? (int)$visitorCount : 0; ?></span>
                    <span class="label" aria-hidden="true">|</span>
                    <span class="label">Tarikh:</span>
                    <span id="currentDateNav" title="Tarikh masa nyata"></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section" aria-label="Imej Hero Kota Marudu">
            <div class="hero-slider" aria-hidden="true">
                <div class="hero-slide is-active" style="background-image:url('images/ilKM.png');"></div>
                <div class="hero-slide" style="background-image:url('images/jagung%20.png');"></div>
                <div class="hero-slide" style="background-image:url('images/majlis%20daerah%20kota%20marudu.png');"></div>
                <div class="hero-overlay"></div>
            </div>
            <div class="hero-content">
                <h2><?php echo t('welcome'); ?></h2>
                <p><?php echo t('welcome_desc'); ?></p>
            </div>
        </section>

        <!-- Berita Section -->
        <section id="berita" class="section">
            <h2 class="section-title"><?php echo t('berita_terkini'); ?></h2>
            <div class="news-grid">
                <article class="news-item">
                    <div class="news-image">📰</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('news_1_title'); ?></h3>
                        <p class="news-date"><?php echo t('news_1_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('news_1_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('baca_selanjutnya'); ?></a>
                    </div>
                </article>
                
                <article class="news-item">
                    <div class="news-image">🏛️</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('news_2_title'); ?></h3>
                        <p class="news-date"><?php echo t('news_2_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('news_2_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('baca_selanjutnya'); ?></a>
                    </div>
                </article>
                
                <article class="news-item">
                    <div class="news-image">🌱</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('news_3_title'); ?></h3>
                        <p class="news-date"><?php echo t('news_3_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('news_3_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('baca_selanjutnya'); ?></a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Aktiviti Section -->
        <section id="aktiviti" class="section">
            <h2 class="section-title"><?php echo t('aktiviti_program'); ?></h2>
            <div class="news-grid">
                <article class="news-item">
                    <div class="news-image">🎯</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('activity_1_title'); ?></h3>
                        <p class="news-date"><?php echo t('activity_1_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('activity_1_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('daftar_sekarang'); ?></a>
                    </div>
                </article>
                
                <article class="news-item">
                    <div class="news-image">🏃‍♂️</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('activity_2_title'); ?></h3>
                        <p class="news-date"><?php echo t('activity_2_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('activity_2_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('maklumat_lanjut'); ?></a>
                    </div>
                </article>
                
                <article class="news-item">
                    <div class="news-image">🎨</div>
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('activity_3_title'); ?></h3>
                        <p class="news-date"><?php echo t('activity_3_date'); ?></p>
                        <p class="news-excerpt"><?php echo t('activity_3_excerpt'); ?></p>
                        <a href="#" class="btn"><?php echo t('jadual_acara'); ?></a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Pengumuman Section -->
        <section id="pengumuman" class="section">
            <h2 class="section-title"><?php echo t('pengumuman_penting'); ?></h2>
            <ul class="announcement-list">
                <li class="announcement-item">
                    <div class="announcement-title"><?php echo t('announcement_1'); ?></div>
                    <span class="announcement-date">18 Jan 2024</span>
                </li>
                <li class="announcement-item">
                    <div class="announcement-title"><?php echo t('announcement_2'); ?></div>
                    <span class="announcement-date">16 Jan 2024</span>
                </li>
                <li class="announcement-item">
                    <div class="announcement-title"><?php echo t('announcement_3'); ?></div>
                    <span class="announcement-date">14 Jan 2024</span>
                </li>
                <li class="announcement-item">
                    <div class="announcement-title"><?php echo t('announcement_4'); ?></div>
                    <span class="announcement-date">12 Jan 2024</span>
                </li>
                <li class="announcement-item">
                    <div class="announcement-title"><?php echo t('announcement_5'); ?></div>
                    <span class="announcement-date">10 Jan 2024</span>
                </li>
            </ul>
            <div style="text-align: center; margin-top: 20px;">
                <a href="#" class="btn btn-secondary"><?php echo t('lihat_semua_pengumuman'); ?></a>
            </div>
        </section>

        <!-- Perkhidmatan Section -->
        <section id="perkhidmatan" class="section">
            <h2 class="section-title"><?php echo t('perkhidmatan_kami'); ?></h2>
            <div class="news-grid">
                <div class="news-item">
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('service_1_title'); ?></h3>
                        <p class="news-excerpt"><?php echo t('service_1_desc'); ?></p>
                        <a href="#" class="btn"><?php echo t('maklumat_lanjut'); ?></a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('service_2_title'); ?></h3>
                        <p class="news-excerpt"><?php echo t('service_2_desc'); ?></p>
                        <a href="#" class="btn"><?php echo t('maklumat_lanjut'); ?></a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-content">
                        <h3 class="news-title"><?php echo t('service_3_title'); ?></h3>
                        <p class="news-excerpt"><?php echo t('service_3_desc'); ?></p>
                        <a href="#" class="btn"><?php echo t('maklumat_lanjut'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <?php include 'newsletter-subscription.php'; ?>

        <!-- Weather Widget Section -->
        <section class="section">
            <h2 class="section-title"><?php echo t('cuaca_semasa', 'Cuaca Semasa'); ?></h2>
            <?php include 'weather-widget.php'; ?>
        </section>

    </main>

    <!-- Pautan Pantas Section -->
    <section class="section" id="pautan-pantas" aria-labelledby="pautanPantasTitle">
        <div class="quick-links">
            <h2 class="section-title" id="pautanPantasTitle"><?php echo t('pautan_pantas'); ?></h2>
            <div class="quick-links-grid">
                <div class="quick-link">
                    <a href="https://i-adu.sabah.gov.my/" target="_blank" rel="noopener noreferrer">i-Adu Aduan</a>
                </div>
                <div class="quick-link">
                    <a href="https://murninetsv2.planmalaysia.gov.my/login" target="_blank" rel="noopener noreferrer">MURNInets v2</a>
                </div>
                <div class="quick-link">
                    <a href="https://egjpkn.sabah.gov.my/SSONewLogin/index.asp" target="_blank" rel="noopener noreferrer">SSO Kerajaan Sabah</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <?php include 'analytics-dashboard.php'; ?>
    <script src="sidebar.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactivity to news items
        document.querySelectorAll('.news-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Hero slider with modern fade/scale transition
        (function() {
            const slides = Array.from(document.querySelectorAll('.hero-slide'));
            if (!slides.length) return;

            let index = 0;
            const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const intervalMs = prefersReduced ? 7000 : 5000;

            setInterval(() => {
                const current = slides[index];
                index = (index + 1) % slides.length;
                const next = slides[index];

                current.classList.remove('is-active');
                next.classList.add('is-active');
            }, intervalMs);
        })();
    </script>
</body>
</html>
