/**
 * Dashboard Security Interactive Scripts - POLIJE SIAGA
 * Dibuat menggunakan Pure Vanilla JavaScript (tanpa framework/library).
 * Mengatur interaksi sidebar dan animasi angka counter.
 */

document.addEventListener('DOMContentLoaded', () => {
    initSidebar();
    animateNumberCounters();
});

/**
 * Inisialisasi perilaku interaktif Sidebar
 * Mendukung hover ekspansi mulus
 */
function initSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (!sidebar) return;

    // Hover effect sudah di-handle oleh CSS dengan performa 60fps GPU acceleration.
    // Script ini memastikan event listener klik pada link berjalan normal.
    const navLinks = sidebar.querySelectorAll('.sidebar-nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href === '#') {
                e.preventDefault();
            }
        });
    });
}

/**
 * Animasi angka counter yang halus pada kartu statistik saat halaman pertama kali dimuat
 */
function animateNumberCounters() {
    const counterElements = document.querySelectorAll('.stat-number');

    counterElements.forEach(el => {
        const rawText = el.innerText.trim();
        const targetValue = parseInt(rawText, 10);

        if (!isNaN(targetValue) && targetValue.toString() === rawText) {
            let start = 0;
            const duration = 850; // ms
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing cubic easeOut: 1 - Math.pow(1 - progress, 3)
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const currentCount = Math.floor(easeOut * targetValue);

                el.innerText = currentCount;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    el.innerText = targetValue;
                }
            }

            requestAnimationFrame(updateCounter);
        }
    });
}
