<?php
// Advanced Visitor Analytics Dashboard
// Safe session handling - avoid starting session after headers sent
$canSendHeaders = !headers_sent();
if (session_status() === PHP_SESSION_NONE && $canSendHeaders) {
    @session_start();
}

$analyticsFile = __DIR__ . DIRECTORY_SEPARATOR . 'analytics.csv';
$today = date('Y-m-d');
$now = date('Y-m-d H:i:s');

// Track page view
$page = $_SERVER['REQUEST_URI'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
$userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Unknown';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

// Detect device type
$device = 'Desktop';
if (preg_match('/mobile|android|iphone|ipad/i', $userAgent)) {
    $device = 'Mobile';
} elseif (preg_match('/tablet|ipad/i', $userAgent)) {
    $device = 'Tablet';
}

// Write analytics data
if (!file_exists($analyticsFile)) {
    $fp = fopen($analyticsFile, 'w');
    fputcsv($fp, ['timestamp', 'date', 'page', 'referer', 'device', 'ip', 'session_id']);
    fclose($fp);
}

$fp = @fopen($analyticsFile, 'a');
if ($fp) {
    flock($fp, LOCK_EX);
    fputcsv($fp, [$now, $today, $page, $referer, $device, $ip, session_id()]);
    flock($fp, LOCK_UN);
    fclose($fp);
}

// Admin dashboard (if accessed with ?admin=1)
if (isset($_GET['admin']) && $_GET['admin'] === '1') {
    ?>
    <!DOCTYPE html>
    <html lang="ms">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Analytics Dashboard - MDKM</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f5f5f5; padding: 20px; }
            .dashboard { max-width: 1400px; margin: 0 auto; }
            .dashboard-header { background: linear-gradient(135deg, #228B22 0%, #32CD32 100%); color: white; padding: 30px; border-radius: 10px; margin-bottom: 30px; }
            .dashboard-header h1 { margin-bottom: 10px; }
            .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
            .stat-card { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .stat-value { font-size: 2.5rem; font-weight: bold; color: #228B22; margin-bottom: 5px; }
            .stat-label { color: #666; font-size: 0.9rem; }
            .chart-container { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 20px; }
            .chart-container h2 { margin-bottom: 20px; color: #228B22; }
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e0e0e0; }
            th { background: #f8f9fa; font-weight: 600; color: #228B22; }
            tr:hover { background: #f8f9fa; }
        </style>
    </head>
    <body>
        <div class="dashboard">
            <div class="dashboard-header">
                <h1>📊 Analytics Dashboard</h1>
                <p>Majlis Daerah Kota Marudu - Statistik Pengunjung</p>
            </div>

            <?php
            if (file_exists($analyticsFile)) {
                $data = [];
                $handle = fopen($analyticsFile, 'r');
                if ($handle) {
                    $header = fgetcsv($handle); // Skip header
                    while (($row = fgetcsv($handle)) !== FALSE) {
                        if (count($row) >= 7) {
                            $data[] = [
                                'timestamp' => $row[0],
                                'date' => $row[1],
                                'page' => $row[2],
                                'referer' => $row[3],
                                'device' => $row[4],
                                'ip' => $row[5],
                                'session_id' => $row[6]
                            ];
                        }
                    }
                    fclose($handle);
                }

                // Calculate statistics
                $totalViews = count($data);
                $todayViews = count(array_filter($data, function($d) use ($today) { return $d['date'] === $today; }));
                $uniqueSessions = count(array_unique(array_column($data, 'session_id')));
                $mobileViews = count(array_filter($data, function($d) { return $d['device'] === 'Mobile'; }));
                $desktopViews = count(array_filter($data, function($d) { return $d['device'] === 'Desktop'; }));

                // Popular pages
                $pageViews = [];
                foreach ($data as $row) {
                    $page = $row['page'];
                    $pageViews[$page] = ($pageViews[$page] ?? 0) + 1;
                }
                arsort($pageViews);
                $topPages = array_slice($pageViews, 0, 10, true);
                ?>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-value"><?php echo number_format($totalViews); ?></div>
                        <div class="stat-label">Jumlah Paparan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value"><?php echo number_format($todayViews); ?></div>
                        <div class="stat-label">Paparan Hari Ini</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value"><?php echo number_format($uniqueSessions); ?></div>
                        <div class="stat-label">Sesi Unik</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value"><?php echo number_format($mobileViews); ?></div>
                        <div class="stat-label">Paparan Mudah Alih</div>
                    </div>
                </div>

                <div class="chart-container">
                    <h2>📄 Laman Popular</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Laman</th>
                                <th>Jumlah Paparan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($topPages as $page => $views): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($page); ?></td>
                                <td><?php echo number_format($views); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="chart-container">
                    <h2>📱 Penggunaan Peranti</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Jenis Peranti</th>
                                <th>Jumlah</th>
                                <th>Peratusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>📱 Mudah Alih</td>
                                <td><?php echo number_format($mobileViews); ?></td>
                                <td><?php echo $totalViews > 0 ? number_format(($mobileViews / $totalViews) * 100, 1) : 0; ?>%</td>
                            </tr>
                            <tr>
                                <td>💻 Desktop</td>
                                <td><?php echo number_format($desktopViews); ?></td>
                                <td><?php echo $totalViews > 0 ? number_format(($desktopViews / $totalViews) * 100, 1) : 0; ?>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="chart-container">
                    <p>Tiada data analitik tersedia.</p>
                </div>
            <?php } ?>
        </div>
    </body>
    </html>
    <?php
    exit;
}
?>

