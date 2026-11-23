<?php
/**
 * Navbar Component - Polije Siaga Security
 * Berisi logo kampus, breadcrumb halaman aktif, dan profil user yang bertugas.
 */
?>
<header class="top-navbar">
    <!-- Brand / Logo Polije Siaga -->
    <div class="brand-section">
        <a href="../index.html" class="brand-link" title="Kembali ke Beranda Polije Siaga">
            <picture>
                <source srcset="../img/logo-polije-siaga.webp" type="image/webp">
                <img src="../img/logoPolijeSiaga.png" alt="Logo Polije Siaga" class="brand-logo" width="36" height="36">
            </picture>
            <div class="brand-info">
                <span class="brand-title">POLIJE SIAGA</span>
                <span class="brand-subtitle">Sistem Informasi Keamanan dan Penjagaan Polije</span>
            </div>
        </a>
    </div>

    <!-- Breadcrumb Navigasi -->
    <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <div class="breadcrumb-item">
            <!-- Home Icon SVG -->
            <svg class="breadcrumb-icon-svg" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">Dashboard</span>
        </div>
    </nav>

    <!-- Profil Petugas Security -->
    <div class="user-profile-section">
        <div class="user-meta">
            <span class="user-name">Danial Nichol</span>
            <span class="user-role">Security</span>
        </div>
        <div class="user-avatar" title="Danial Nichol - Security">
            <span>D</span>
        </div>
    </div>
</header>
