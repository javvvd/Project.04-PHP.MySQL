// Word counter untuk contact.html
document.addEventListener("DOMContentLoaded", () => {
    const messageBox = document.getElementById("message");
    const wordCountEl = document.getElementById("wordCount");

    if (messageBox && wordCountEl) {
        messageBox.addEventListener("input", () => {
            const words = messageBox.value.trim().split(/\s+/).filter(Boolean);
            wordCountEl.textContent = words.length;
        });
    }
});

// Tambahkan ke script.js
setInterval(() => {
    const clock = document.getElementById("clock");
    if (clock) {
        const now = new Date();
        clock.textContent = now.toLocaleTimeString('id-ID');
    }
}, 1000);


document.addEventListener('DOMContentLoaded', function () {
        // Tambahkan kelas fade-in setelah halaman dimuat
        document.body.classList.add('fade-in');

        // Tangani klik pada semua link <a>
        const links = document.querySelectorAll('a[href]');
        links.forEach(link => {
            // Abaikan link eksternal atau anchor (#)
            const isInternal = link.hostname === window.location.hostname;
            const isAnchor = link.getAttribute('href').startsWith('#');

            if (isInternal && !isAnchor) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Tambahkan efek fade-out
                    document.body.classList.remove('fade-in');
                    document.body.classList.add('fade-out');

                    // Setelah delay, redirect ke halaman tujuan
                    setTimeout(() => {
                        window.location.href = link.href;
                    }, 300); // Sesuaikan dengan durasi transition
                });
            }
        });
    });


