<?php
// Payment Integration - Basic Structure
// This is a template for payment integration
// Replace with actual payment gateway (e.g., Stripe, PayPal, iPay88, etc.)

session_start();
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayaran Dalam Talian - MDKM</title>
    <link rel="stylesheet" href="sidebar.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; }
        .header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 1rem 0; }
        .header-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .main-content { max-width: 800px; margin: 30px auto; padding: 0 20px; }
        .payment-card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .payment-card h2 { color: #228B22; margin-bottom: 20px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
        .form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 1rem; }
        .form-group input:focus, .form-group select:focus { outline: none; border-color: #228B22; }
        .payment-amount { background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        .payment-amount h3 { color: #228B22; margin-bottom: 10px; }
        .amount-display { font-size: 2rem; font-weight: bold; color: #228B22; }
        .payment-types { display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-bottom: 20px; }
        .payment-type { border: 2px solid #ddd; padding: 15px; border-radius: 8px; text-align: center; cursor: pointer; transition: all 0.3s ease; }
        .payment-type:hover { border-color: #228B22; background: #f0fff0; }
        .payment-type input[type="radio"] { display: none; }
        .payment-type input[type="radio"]:checked + label { color: #228B22; font-weight: bold; }
        .payment-type.selected { border-color: #228B22; background: #f0fff0; }
        .btn-pay { width: 100%; padding: 15px; background: #228B22; color: white; border: none; border-radius: 6px; font-size: 1.1rem; font-weight: bold; cursor: pointer; }
        .btn-pay:hover { background: #32CD32; }
        .info-box { background: #e3f2fd; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #2196F3; }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <header class="header">
        <div class="header-container">
            <?php include 'header-brand.php'; ?>
        </div>
    </header>

    <main class="main-content">
        <div class="payment-card">
            <h2>💳 Bayaran Dalam Talian</h2>
            
            <div class="info-box">
                <strong>Maklumat Penting:</strong> Sistem pembayaran dalam talian sedang dalam pembangunan. 
                Sila hubungi kaunter perkhidmatan untuk maklumat lanjut mengenai pembayaran.
            </div>

            <form id="paymentForm" onsubmit="handlePayment(event)">
                <div class="payment-amount">
                    <h3>Jumlah Bayaran</h3>
                    <div class="amount-display" id="amountDisplay">RM 0.00</div>
                </div>

                <div class="form-group">
                    <label>Jenis Bayaran</label>
                    <select id="paymentType" required onchange="updateAmount()">
                        <option value="">Sila Pilih</option>
                        <option value="cukai" data-amount="100.00">Cukai Taksiran</option>
                        <option value="lesen" data-amount="50.00">Lesen Perniagaan</option>
                        <option value="permit" data-amount="200.00">Permit Pembinaan</option>
                        <option value="denda" data-amount="0.00">Denda (Sila Masukkan Jumlah)</option>
                    </select>
                </div>

                <div class="form-group" id="customAmountGroup" style="display: none;">
                    <label>Jumlah Bayaran (RM)</label>
                    <input type="number" id="customAmount" step="0.01" min="0" placeholder="0.00" onchange="updateAmount()">
                </div>

                <div class="form-group">
                    <label>No. Rujukan / Akaun</label>
                    <input type="text" id="referenceNumber" required placeholder="Contoh: 123456789">
                </div>

                <div class="form-group">
                    <label>Nama Penuh</label>
                    <input type="text" id="payerName" required placeholder="Nama seperti dalam kad pengenalan">
                </div>

                <div class="form-group">
                    <label>No. Kad Pengenalan</label>
                    <input type="text" id="icNumber" required placeholder="Contoh: 123456789012">
                </div>

                <div class="form-group">
                    <label>No. Telefon</label>
                    <input type="tel" id="phoneNumber" required placeholder="Contoh: 0123456789">
                </div>

                <div class="form-group">
                    <label>Alamat Emel</label>
                    <input type="email" id="email" required placeholder="email@example.com">
                </div>

                <div class="form-group">
                    <label>Kaedah Pembayaran</label>
                    <div class="payment-types">
                        <div class="payment-type" onclick="selectPaymentMethod('credit')">
                            <input type="radio" name="paymentMethod" value="credit" id="credit" required>
                            <label for="credit">💳 Kredit/Debit</label>
                        </div>
                        <div class="payment-type" onclick="selectPaymentMethod('online')">
                            <input type="radio" name="paymentMethod" value="online" id="online">
                            <label for="online">🏦 Online Banking</label>
                        </div>
                        <div class="payment-type" onclick="selectPaymentMethod('ewallet')">
                            <input type="radio" name="paymentMethod" value="ewallet" id="ewallet">
                            <label for="ewallet">📱 E-Wallet</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-pay">Teruskan ke Pembayaran</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="sidebar.js"></script>
    <script>
        function updateAmount() {
            const type = document.getElementById('paymentType').value;
            const customGroup = document.getElementById('customAmountGroup');
            const amountDisplay = document.getElementById('amountDisplay');
            
            if (type === 'denda') {
                customGroup.style.display = 'block';
                const customAmount = parseFloat(document.getElementById('customAmount').value) || 0;
                amountDisplay.textContent = 'RM ' + customAmount.toFixed(2);
            } else {
                customGroup.style.display = 'none';
                const option = document.getElementById('paymentType').selectedOptions[0];
                const amount = option ? parseFloat(option.getAttribute('data-amount')) || 0 : 0;
                amountDisplay.textContent = 'RM ' + amount.toFixed(2);
            }
        }

        function selectPaymentMethod(method) {
            document.querySelectorAll('.payment-type').forEach(el => el.classList.remove('selected'));
            document.getElementById(method).checked = true;
            event.currentTarget.classList.add('selected');
        }

        function handlePayment(event) {
            event.preventDefault();
            alert('Peringatan: Sistem pembayaran sedang dalam pembangunan.\n\nUntuk maklumat lanjut, sila hubungi kaunter perkhidmatan MDKM.');
            // In production, integrate with payment gateway here
            // Example: Stripe, PayPal, iPay88, etc.
        }
    </script>
</body>
</html>

