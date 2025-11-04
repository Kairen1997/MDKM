<?php
// Newsletter Subscription Component
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subscribe_email'])) {
    $email = filter_var($_POST['subscribe_email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'newsletter-subscribers.csv';
        $firstWrite = !file_exists($file);
        $fp = @fopen($file, 'a');
        
        if ($fp) {
            if ($firstWrite) {
                fputcsv($fp, ['email', 'subscribed_date', 'active']);
            }
            
            // Check if email already exists
            $exists = false;
            if (file_exists($file)) {
                $handle = fopen($file, 'r');
                if ($handle) {
                    while (($data = fgetcsv($handle)) !== FALSE) {
                        if (isset($data[0]) && strtolower($data[0]) === strtolower($email)) {
                            $exists = true;
                            break;
                        }
                    }
                    fclose($handle);
                }
            }
            
            if (!$exists) {
                flock($fp, LOCK_EX);
                fputcsv($fp, [$email, date('Y-m-d H:i:s'), '1']);
                flock($fp, LOCK_UN);
                $success = true;
            } else {
                $error = 'Emel ini sudah didaftarkan.';
            }
            fclose($fp);
        } else {
            $error = 'Maaf, berlaku ralat. Sila cuba lagi.';
        }
    } else {
        $error = 'Sila masukkan emel yang sah.';
    }
}
?>
<div class="newsletter-widget">
    <style>
        .newsletter-widget {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin: 30px 0;
            text-align: center;
        }

        .newsletter-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .newsletter-description {
            margin-bottom: 20px;
            opacity: 0.95;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            outline: none;
        }

        .newsletter-submit {
            padding: 12px 30px;
            background: #FFD700;
            color: #228B22;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .newsletter-submit:hover {
            background: #FFA500;
        }

        .newsletter-message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            font-weight: 500;
        }

        .newsletter-message.success {
            background: rgba(255,255,255,0.2);
        }

        .newsletter-message.error {
            background: rgba(255,0,0,0.2);
        }

        @media (max-width: 768px) {
            .newsletter-form {
                flex-direction: column;
            }
            .newsletter-input,
            .newsletter-submit {
                width: 100%;
            }
        }
    </style>

    <div class="newsletter-title">📧 Langgan E-Buletin</div>
    <div class="newsletter-description">
        Dapatkan maklumat terkini tentang aktiviti, program dan pengumuman penting dari MDKM terus ke peti mel anda.
    </div>

    <form method="POST" class="newsletter-form" onsubmit="return validateNewsletterForm(event)">
        <input type="email" 
               name="subscribe_email" 
               class="newsletter-input" 
               placeholder="Masukkan alamat emel anda" 
               required
               aria-label="Alamat emel">
        <button type="submit" class="newsletter-submit">Langgan</button>
    </form>

    <?php if ($success): ?>
        <div class="newsletter-message success">
            ✅ Terima kasih! Emel anda telah didaftarkan. Sila semak peti mel anda untuk pengesahan.
        </div>
    <?php elseif ($error): ?>
        <div class="newsletter-message error">
            ⚠️ <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <script>
        function validateNewsletterForm(event) {
            const form = event.target;
            const email = form.querySelector('input[type="email"]').value;
            
            if (!email) {
                alert('Sila masukkan alamat emel.');
                return false;
            }
            
            return true;
        }
    </script>
</div>

