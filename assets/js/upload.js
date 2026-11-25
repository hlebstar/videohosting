document.getElementById('up-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let ok = true;

    const title = document.getElementById('title').value.trim();
    const cat   = document.getElementById('cat') ? document.getElementById('cat').value : '1'; // Категория убрана из UI, но если оставите - будет работать
    const video = document.getElementById('video').files[0];

    document.querySelectorAll('.f-err').forEach(el => el.textContent = '');

    if (title.length < 3) {
        document.getElementById('err-title').textContent = 'Минимум 3 символа';
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
        const btn = document.querySelector('.btn-studio');
        btn.disabled = true;
        btn.textContent = 'Загрузка...';
        alert('Валидация прошла! Можно отправлять на сервер');
        btn.disabled = false;
        btn.textContent = 'Сохранить';
    }
});

// Обновленный обработчик превью
document.getElementById('video')?.addEventListener('change', function() {
    const file = this.files[0];
    const container = document.getElementById('video-preview-container');
    const fileNameEl = document.getElementById('file-name');
    const videoLinkEl = document.getElementById('video-link');

    if (!file) {
        container.innerHTML = '<div class="preview-placeholder">Превью не выбрано</div>';
        fileNameEl.textContent = 'не выбран';
        videoLinkEl.textContent = 'https://videola.ru/watch/...';
        return;
    }

    // Обновляем имя файла
    fileNameEl.textContent = file.name;
    
    // Имитируем ссылку
    const fakeId = Math.random().toString(36).substring(2, 10);
    videoLinkEl.textContent = `https://videola.ru/watch/${fakeId}`;

    // Вставляем видео в превью
    const url = URL.createObjectURL(file);
    container.innerHTML = `<video src="${url}" controls></video>`;
});