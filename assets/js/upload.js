document.getElementById('up-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let ok = true;

    const title = document.getElementById('title').value.trim();
    const cat   = document.getElementById('cat').value;
    const video = document.getElementById('video').files[0];

    document.querySelectorAll('.f-err').forEach(el => el.textContent = '');

    if (title.length < 3) {
        document.getElementById('err-title').textContent = 'Минимум 3 символа';
        ok = false;
    }

    if (!cat) {
        document.getElementById('err-cat').textContent = 'Выберите категорию';
        ok = false;
    }

    if (!video) {
        document.getElementById('err-video').textContent = 'Выберите файл';
        ok = false;
    } else if (video.type !== 'video/mp4') {
        document.getElementById('err-video').textContent = 'Только .mp4';
        ok = false;
    } else if (video.size > 100 * 1024 * 1024) {
        document.getElementById('err-video').textContent = 'Максимум 100 МБ';
        ok = false;
    }

    if (ok) {
        // Здесь позже будет отправка на сервер
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.textContent = 'Загрузка...';
        alert('Валидация прошла! Можно отправлять на сервер');
        btn.disabled = false;
        btn.textContent = 'Загрузить';
    }
});

// Превью выбранного видео
document.getElementById('video')?.addEventListener('change', function() {
    const file = this.files[0];
    const preview = document.getElementById('video-preview');
    if (!preview) return;

    if (!file) {
        preview.innerHTML = '';
        return;
    }

    const url = URL.createObjectURL(file);
    preview.innerHTML = `
        <video src="${url}" controls style="max-width:100%; max-height:240px; border-radius:6px;"></video>
        <p style="font-size:13px; color:#666; margin-top:6px;">
            ${file.name} — ${(file.size / 1024 / 1024).toFixed(1)} МБ
        </p>
    `;
});