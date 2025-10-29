<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majlis Daerah Kota Marudu - Anugerah</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
        }

        .page-header {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px 10px 20px;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1e1e1e;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .main-content { max-width: 1200px; margin: 0 auto; padding: 10px 20px 60px 20px; }

        /* Awards grid */
        .awards-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .award-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            min-height: 340px;
        }

        .award-media {
            position: relative;
            background: #edf2f7;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .award-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .award-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .award-thumb {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e9ecef;
            background: #111;
            display: block;
        }

        .award-thumb img { width: 100%; height: auto; display: block; }

        .award-title { font-size: 1.25rem; color: #1a5e1a; font-weight: 700; }
        .award-meta { color: #6b7280; font-size: 0.95rem; }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background: #228B22;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background .2s ease;
            width: fit-content;
        }

        .btn:hover { background: #32CD32; }

        /* Responsive */
        @media (max-width: 992px) {
            .awards-grid { grid-template-columns: 1fr; }
            .award-card { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="page-header">
        <h1 class="page-title">Anugerah</h1>
    </div>

    <main class="main-content">
        <section class="awards-grid">
            <!-- Award 1 -->
            <article class="award-card">
                <div class="award-media">
                    <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1200&auto=format&fit=crop" alt="Majlis penyampaian anugerah">
                </div>
                <div class="award-body">
                    <a class="award-thumb" href="#" title="Anugerah Laman Web Terbaik">
                        <img src="https://images.unsplash.com/photo-1603706580939-ec7f2d6a8a33?q=80&w=1200&auto=format&fit=crop" alt="Poster anugerah">
                    </a>
                    <div>
                        <h3 class="award-title">Penerimaan Anugerah Website Terbaik 2021</h3>
                        <p class="award-meta">Dianjurkan oleh Jabatan Perkhidmatan Komputer Negeri Sabah dengan kerjasama Kementerian Sains, Teknologi dan Inovasi Sabah.</p>
                    </div>
                    <a class="btn" href="#" target="_blank">Pautan</a>
                </div>
            </article>

            <!-- Award 2 -->
            <article class="award-card">
                <div class="award-media">
                    <img src="https://images.unsplash.com/photo-1515165562835-c3b8c2e8e66b?q=80&w=1200&auto=format&fit=crop" alt="Majlis anugerah ICT">
                </div>
                <div class="award-body">
                    <a class="award-thumb" href="#" title="Anugerah Inovasi ICT">
                        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?q=80&w=1200&auto=format&fit=crop" alt="Poster anugerah ICT">
                    </a>
                    <div>
                        <h3 class="award-title">Anugerah Inovasi ICT - Perkhidmatan Digital</h3>
                        <p class="award-meta">Pengiktirafan atas komitmen memperkasa perkhidmatan dalam talian dan pengalaman pengguna yang lebih baik.</p>
                    </div>
                    <a class="btn" href="#" target="_blank">Pautan</a>
                </div>
            </article>

            <!-- Award 3 -->
            <article class="award-card">
                <div class="award-media">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1200&auto=format&fit=crop" alt="Malam anugerah komuniti">
                </div>
                <div class="award-body">
                    <a class="award-thumb" href="#" title="Anugerah Komuniti">
                        <img src="https://images.unsplash.com/photo-1551292831-023188e78222?q=80&w=1200&auto=format&fit=crop" alt="Poster anugerah komuniti">
                    </a>
                    <div>
                        <h3 class="award-title">Anugerah Kecemerlangan Perkhidmatan Komuniti</h3>
                        <p class="award-meta">Penghargaan kepada inisiatif komuniti dan kerjasama strategik yang memberi impak positif kepada rakyat.</p>
                    </div>
                    <a class="btn" href="#" target="_blank">Pautan</a>
                </div>
            </article>
        </section>
    </main>

    <script src="sidebar.js"></script>
</body>
</html>


