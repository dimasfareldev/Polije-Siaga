<?php
/**
 * Sidebar Component - Polije Siaga Security
 * Menggunakan Pure Inline SVG agar ikon 100% selalu muncul tanpa ketergantungan internet/CDN.
 * Mendukung mode Ringkas (Collapsed - Gambar 1) dan mode Melebar (Expanded - Gambar 2).
 */

$current_page = $current_page ?? 'dashboard';
?>
<aside class="sidebar-container" id="sidebar">
    <div class="sidebar-nav-wrapper">
        <ul class="sidebar-nav-list">
            <!-- 1. Dashboard -->
            <li class="sidebar-nav-item">
                <a href="dashboard.php" class="sidebar-nav-link <?= $current_page === 'dashboard' ? 'active' : '' ?>" title="Dashboard">
                    <span class="nav-icon-box">
                        <!-- Grid Icon (4 Rounded Squares) -->
                        <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="7" height="7" x="3" y="3" rx="1.5"/>
                            <rect width="7" height="7" x="14" y="3" rx="1.5"/>
                            <rect width="7" height="7" x="14" y="14" rx="1.5"/>
                            <rect width="7" height="7" x="3" y="14" rx="1.5"/>
                        </svg>
                    </span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <!-- 2. Patroli Security -->
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link <?= $current_page === 'patroli' ? 'active' : '' ?>" title="Patroli Security">
                    <span class="nav-icon-box">
                        <!-- Users Icon -->
                        <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </span>
                    <span class="nav-text">Patroli Security</span>
                </a>
            </li>

            <!-- 3. Riwayat Patroli -->
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link <?= $current_page === 'riwayat' ? 'active' : '' ?>" title="Riwayat Patroli">
                    <span class="nav-icon-box">
                        <!-- Document / File-Text Icon -->
                        <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                            <path d="M10 9H8"/>
                            <path d="M16 13H8"/>
                            <path d="M16 17H8"/>
                        </svg>
                    </span>
                    <span class="nav-text">Riwayat Patroli</span>
                </a>
            </li>

            <!-- 4. Laporan Kehilangan -->
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link <?= $current_page === 'laporan_kehilangan' ? 'active' : '' ?>" title="Laporan Kehilangan">
                    <span class="nav-icon-box">
                        <!-- Alert Triangle Icon -->
                        <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
                            <path d="M12 9v4"/>
                            <path d="M12 17h.01"/>
                        </svg>
                    </span>
                    <span class="nav-text">Laporan Kehilangan</span>
                </a>
            </li>

            <!-- 5. Laporan Penemuan Barang -->
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link <?= $current_page === 'laporan_temuan' ? 'active' : '' ?>" title="Laporan Penemuan Barang">
                    <span class="nav-icon-box">
                        <!-- Box / Package 3D Icon -->
                        <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                            <path d="m3.3 7 8.7 5 8.7-5"/>
                            <path d="M12 22V12"/>
                        </svg>
                    </span>
                    <span class="nav-text">Laporan Penemuan Barang</span>
                </a>
            </li>
        </ul>

        <!-- Tombol Logout di bagian paling bawah -->
        <div class="sidebar-footer">
            <a href="../login.html" class="sidebar-nav-link logout-link" title="Keluar">
                <span class="nav-icon-box">
                    <!-- Log Out Icon -->
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <polyline points="16 17 21 12 16 7"/>
                        <line x1="21" x2="9" y1="12" y2="12"/>
                    </svg>
                </span>
                <span class="nav-text">Keluar</span>
            </a>
        </div>
    </div>
</aside>
