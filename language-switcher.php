<?php
// Language Switcher Component
// Get language from translations.php if already loaded
if (!isset($lang)) {
    // Safe session handling - avoid starting session after headers sent
    $canSendHeaders = !headers_sent();
    if (session_status() === PHP_SESSION_NONE && $canSendHeaders) {
        @session_start();
    }

    if (session_status() === PHP_SESSION_ACTIVE) {
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'ms'; // Default to Malay
        }

        if (isset($_GET['lang'])) {
            $_SESSION['lang'] = $_GET['lang'] === 'en' ? 'en' : 'ms';
        }

        $lang = $_SESSION['lang'];
    } else {
        // Fallback if session cannot be started
        $lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'ms';
    }
}
?>
<div class="language-switcher">
    <style>
        .language-switcher {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 999;
            background: white;
            border-radius: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 5px;
            display: flex;
            gap: 5px;
        }

        .lang-btn {
            padding: 8px 16px;
            border: none;
            background: transparent;
            color: #333;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .lang-btn.active {
            background: #228B22;
            color: white;
        }

        .lang-btn:hover {
            background: #f0f0f0;
        }

        .lang-btn.active:hover {
            background: #32CD32;
        }

        @media (max-width: 768px) {
            .language-switcher {
                top: 60px;
                right: 10px;
                padding: 4px;
            }
            .lang-btn {
                padding: 6px 12px;
                font-size: 0.9rem;
            }
        }
    </style>
    <button class="lang-btn <?php echo $lang === 'ms' ? 'active' : ''; ?>" 
            onclick="switchLanguage('ms')">MS</button>
    <button class="lang-btn <?php echo $lang === 'en' ? 'active' : ''; ?>" 
            onclick="switchLanguage('en')">EN</button>
    <script>
        function switchLanguage(lang) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('lang', lang);
            window.location.href = currentUrl.toString();
        }
    </script>
</div>

