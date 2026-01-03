import './browser-check';
import './bootstrap';

const targetDate = new Date("2025-09-22T19:00:00+07:00");

function updateCountdown() {
    const now = new Date();
    const diff = targetDate - now;

    if (diff <= 0) return;

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);

    document.getElementById("count-days").textContent = String(days).padStart(2, '0');
    document.getElementById("count-hours").textContent = String(hours).padStart(2, '0');
    document.getElementById("count-minutes").textContent = String(minutes).padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();
