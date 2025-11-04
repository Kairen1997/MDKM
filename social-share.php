<?php
// Social Media Sharing Component
?>
<div class="social-share-widget">
    <style>
        .social-share-widget {
            position: fixed;
            right: 20px;
            bottom: 100px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .share-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .share-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .share-btn.facebook { background: #1877F2; }
        .share-btn.twitter { background: #1DA1F2; }
        .share-btn.whatsapp { background: #25D366; }
        .share-btn.email { background: #228B22; }

        @media (max-width: 768px) {
            .social-share-widget {
                right: 10px;
                bottom: 80px;
            }
            .share-btn {
                width: 45px;
                height: 45px;
                font-size: 1rem;
            }
        }
    </style>
    <?php
    $currentUrl = urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    $pageTitle = urlencode(isset($pageTitle) ? $pageTitle : 'Majlis Daerah Kota Marudu');
    ?>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentUrl; ?>" 
       target="_blank" 
       class="share-btn facebook" 
       aria-label="Kongsi di Facebook"
       title="Kongsi di Facebook">📘</a>
    <a href="https://twitter.com/intent/tweet?url=<?php echo $currentUrl; ?>&text=<?php echo $pageTitle; ?>" 
       target="_blank" 
       class="share-btn twitter" 
       aria-label="Kongsi di Twitter"
       title="Kongsi di Twitter">🐦</a>
    <a href="https://wa.me/?text=<?php echo urlencode($pageTitle . ' - ' . $currentUrl); ?>" 
       target="_blank" 
       class="share-btn whatsapp" 
       aria-label="Kongsi melalui WhatsApp"
       title="Kongsi melalui WhatsApp">💬</a>
    <a href="mailto:?subject=<?php echo $pageTitle; ?>&body=<?php echo $currentUrl; ?>" 
       class="share-btn email" 
       aria-label="Kongsi melalui Emel"
       title="Kongsi melalui Emel">✉️</a>
</div>

