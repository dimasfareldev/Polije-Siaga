<?php
$petugas = [
    'nama_lengkap' => 'Danial Nichol',
    'panggilan'    => 'Danial',
    'peran'        => 'Security',
    'inisial'      => 'D'
];

$statistik = [
    'total_patroli'        => 12,
    'patroli_subtext'      => 'Patroli Tercatat',
    'laporan_kehilangan'   => 4,
    'kehilangan_subtext'   => 'Laporan Masuk',
    'barang_ditemukan'     => 4,
    'ditemukan_subtext'    => 'Barang Diamankan'
];

$laporan_kehilangan_terbaru = [
    [
        'barang'   => 'Dompet Kulit Coklat',
        'pelapor'  => 'Dimas Farel (Mahasiswa TI)',
        'lokasi'   => 'Gedung TI Lt. 2',
        'waktu'    => '10 Menit Lalu',
        'status'   => 'Perlu Dicek'
    ],
    [
        'barang'   => 'Kunci Motor Honda Vario',
        'pelapor'  => 'Siti Nurhaliza (Mahasiswi Akuntansi)',
        'lokasi'   => 'Parkir Timur Kampus',
        'waktu'    => '45 Menit lalu',
        'status'   => 'Proses Pencarian'
    ]
];

$barang_temuan_terbaru = [
    [
        'barang'   => 'Flashdisk Sandisk 64GB',
        'penemu'   => 'Ditemukan di Lab Komputer 3',
        'pos'      => 'Pos Satpam Gedung TI',
        'waktu'    => 'Hari Ini, 09:15',
        'status'   => 'Di Pos Satpam'
    ],
    [
        'barang'   => 'Helm KYT Hitam Doff',
        'penemu'   => 'Tertinggal di Area Lapangan Basket',
        'pos'      => 'Pos Satpam Utama (Gerbang)',
        'waktu'    => 'Hari Ini, 08:00',
        'status'   => 'Di Pos Satpam'
    ]
];

$daftar_shift = [
    [
        'nama'     => 'Shift Pagi',
        'jam'      => '07.00 – 15.00',
        'petugas'  => 'Ananda Danial (Anda)',
        'status'   => 'Sedang Bertugas',
        'tipe'     => 'aktif'
    ],
    [
        'nama'     => 'Shift Sore',
        'jam'      => '15.00 – 23.00',
        'petugas'  => 'Hendra Pratama',
        'status'   => 'Piket Berikutnya',
        'tipe'     => 'menunggu'
    ],
    [
        'nama'     => 'Shift Malam',
        'jam'      => '23.00 – 07.00',
        'petugas'  => 'Agus Setiawan',
        'status'   => 'Piket Malam',
        'tipe'     => 'malam'
    ]
];

$current_page = 'dashboard';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Security - Polije Siaga</title>
    
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body class="dashboard-body">

    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <div class="dashboard-layout">
        
        <?php include __DIR__ . '/includes/sidebar.php'; ?>

        <main class="main-content">
            <section class="dashboard-hero-card">
                <div class="hero-overlay"></div>

                <div class="hero-inner-content">
                    
                    <header class="hero-header">
                        <span class="hero-tag">Dashboard</span>
                        <h1 class="hero-title">Selamat Datang, <?= htmlspecialchars($petugas['nama_lengkap']) ?>!</h1>
                    </header>

                    <div class="stats-grid">
                        
                        <article class="stat-card">
                            <div class="stat-card-header">
                                <svg class="stat-icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                                <h3 class="stat-title">Total Patroli</h3>
                            </div>
                            <div class="stat-card-body">
                                <span class="stat-number"><?= $statistik['total_patroli'] ?></span>
                                <span class="stat-subtext"><?= htmlspecialchars($statistik['patroli_subtext']) ?></span>
                            </div>
                        </article>

                        <article class="stat-card">
                            <div class="stat-card-header">
                                <svg class="stat-icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                    <path d="M12 11v4"/>
                                    <path d="M12 18h.01"/>
                                </svg>
                                <h3 class="stat-title">Laporan Kehilangan</h3>
                            </div>
                            <div class="stat-card-body">
                                <span class="stat-number"><?= $statistik['laporan_kehilangan'] ?></span>
                                <span class="stat-subtext"><?= htmlspecialchars($statistik['kehilangan_subtext']) ?></span>
                            </div>
                        </article>

                        <article class="stat-card">
                            <div class="stat-card-header">
                                <svg class="stat-icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                                    <path d="m3.3 7 8.7 5 8.7-5"/>
                                    <path d="M12 22V12"/>
                                </svg>
                                <h3 class="stat-title">Barang Ditemukan</h3>
                            </div>
                            <div class="stat-card-body">
                                <span class="stat-number"><?= $statistik['barang_ditemukan'] ?></span>
                                <span class="stat-subtext"><?= htmlspecialchars($statistik['ditemukan_subtext']) ?></span>
                            </div>
                        </article>

                    </div>

                    <div class="dashboard-activity-row">
                        
                        <section class="activity-card">
                            <div class="activity-card-header">
                                <div class="header-title-group">
                                    <svg class="activity-header-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/>
                                        <line x1="12" y1="8" x2="12" y2="12"/>
                                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                                    </svg>
                                    <h3 class="activity-title">Laporan Kehilangan Masuk</h3>
                                </div>
                                <a href="#" class="view-all-link">Lihat Semua &rarr;</a>
                            </div>

                            <ul class="task-list">
                                <?php foreach ($laporan_kehilangan_terbaru as $item): ?>
                                    <li class="task-item">
                                        <div class="task-icon-wrap">
                                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="20" height="14" x="2" y="5" rx="2"/>
                                                <line x1="2" x2="22" y1="10" y2="10"/>
                                            </svg>
                                        </div>
                                        <div class="task-details">
                                            <span class="task-title"><?= htmlspecialchars($item['barang']) ?></span>
                                            <span class="task-meta"><?= htmlspecialchars($item['pelapor']) ?> &bull; <span class="text-highlight"><?= htmlspecialchars($item['lokasi']) ?></span></span>
                                        </div>
                                        <div class="task-right">
                                            <span class="task-badge badge-warning"><?= htmlspecialchars($item['status']) ?></span>
                                            <span class="task-time"><?= htmlspecialchars($item['waktu']) ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </section>

                        <section class="activity-card">
                            <div class="activity-card-header">
                                <div class="header-title-group">
                                    <svg class="activity-header-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                                        <path d="m3.3 7 8.7 5 8.7-5"/>
                                        <path d="M12 22V12"/>
                                    </svg>
                                    <h3 class="activity-title">Barang Temuan di Pos Satpam</h3>
                                </div>
                                <a href="#" class="view-all-link">Lihat Semua &rarr;</a>
                            </div>

                            <ul class="task-list">
                                <?php foreach ($barang_temuan_terbaru as $item): ?>
                                    <li class="task-item">
                                        <div class="task-icon-wrap task-icon-success">
                                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"/>
                                            </svg>
                                        </div>
                                        <div class="task-details">
                                            <span class="task-title"><?= htmlspecialchars($item['barang']) ?></span>
                                            <span class="task-meta"><?= htmlspecialchars($item['penemu']) ?></span>
                                            <span class="task-submeta"><?= htmlspecialchars($item['pos']) ?></span>
                                        </div>
                                        <div class="task-right">
                                            <span class="task-badge badge-success"><?= htmlspecialchars($item['status']) ?></span>
                                            <span class="task-time"><?= htmlspecialchars($item['waktu']) ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </section>

                    </div>

                    <section class="schedule-banner-card">
                        <div class="schedule-header">
                            <div class="header-title-group">
                                <svg class="schedule-calendar-icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                                    <line x1="16" x2="16" y1="2" y2="6"/>
                                    <line x1="8" x2="8" y1="2" y2="6"/>
                                    <line x1="3" x2="21" y1="10" y2="10"/>
                                </svg>
                                <div>
                                    <h2 class="schedule-title">Jadwal 3 Shift Hari Ini</h2>
                                    <span class="schedule-subtitle">28 Oktober 2026 &bull; Rotasi 24 Jam Satpam Polije</span>
                                </div>
                            </div>
                        </div>

                        <div class="shifts-three-grid">
                            <?php foreach ($daftar_shift as $index => $shift): ?>
                                <div class="shift-item <?= $shift['tipe'] === 'aktif' ? 'shift-item-active' : '' ?>">
                                    <div class="shift-top">
                                        <span class="shift-name"><?= htmlspecialchars($shift['nama']) ?></span>
                                        <span class="shift-hours"><?= htmlspecialchars($shift['jam']) ?></span>
                                    </div>
                                    <div class="shift-bottom">
                                        <div class="shift-officer">
                                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                                <circle cx="12" cy="7" r="4"/>
                                            </svg>
                                            <span><?= htmlspecialchars($shift['petugas']) ?></span>
                                        </div>
                                        <span class="shift-status-pill status-pill-<?= $shift['tipe'] ?>">
                                            <?php if ($shift['tipe'] === 'aktif'): ?>
                                                <span class="status-dot"></span>
                                            <?php endif; ?>
                                            <?= htmlspecialchars($shift['status']) ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                </div>
            </section>
        </main>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>