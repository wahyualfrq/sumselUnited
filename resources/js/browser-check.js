function isLegacyBrowser() {
  try {
    new Function("import('data:text/javascript,')");
    return false;
  } catch (e) {
    return true;
  }
}

function renderFallbackCanvas(message1, message2) {
  const canvas = document.createElement('canvas');
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  document.body.innerHTML = '';
  document.body.appendChild(canvas);

  const ctx = canvas.getContext('2d');
  ctx.fillStyle = '#fff';
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = '#e00';
  ctx.font = '24px sans-serif';
  ctx.textAlign = 'center';
  ctx.fillText(message1, canvas.width / 2, canvas.height / 2 - 20);
  ctx.fillText(message2, canvas.width / 2, canvas.height / 2 + 20);
}

if (isLegacyBrowser()) {
  renderFallbackCanvas(
    '🚫 Browser Anda tidak didukung',
    'Silakan gunakan versi terbaru untuk akses penuh'
  );
}