document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('up-form');
    const videoInput = document.getElementById('video');
    const cancelBtn = document.querySelector('.studio-actions .btn-out');

    //валидация и отправка
    form?.addEventListener('submit', function (e) {
        e.preventDefault();

        let ok = true;
        const title = document.getElementById('title').value.trim();
        const cat = document.getElementById('cat')?.value || '';
        const video = videoInput?.files[0];

        document.querySelectorAll('.f-err').forEach(el => el.textContent = '');

        if (title.length < 3) {
            document.getElementById('err-title').textContent = 'Минимум 3 символа';
            ok = false;
        }

        if (!cat) {
            const errCat = document.getElementById('err-cat');
            if (errCat) errCat.textContent = 'Выберите категорию';
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

        if (!ok) return;

        const btn = document.querySelector('.btn-studio');
        btn.disabled = true;
        btn.textContent = 'Загрузка...';

        setTimeout(() => {
            alert('Валидация прошла! Видео готово к отправке на сервер');
            btn.disabled = false;
            btn.textContent = 'Сохранить';
        }, 800);
    });

    //превью видео 
    videoInput?.addEventListener('change', function () {
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

        fileNameEl.textContent = file.name;
        const fakeId = Math.random().toString(36).substring(2, 10);
        videoLinkEl.textContent = `https://videola.ru/watch/${fakeId}`;

        const url = URL.createObjectURL(file);
        container.innerHTML = `<video src="${url}" controls></video>`;
    });

    cancelBtn?.addEventListener('click', function () {
        if (confirm('Отменить изменения?')) {
            form.reset();
            document.getElementById('video-preview-container').innerHTML =
                '<div class="preview-placeholder">Превью не выбрано</div>';
            document.getElementById('file-name').textContent = 'не выбран';
            document.getElementById('video-link').textContent = 'https://videola.ru/watch/...';
            document.querySelectorAll('.f-err').forEach(el => el.textContent = '');
        }
    });

    //перкключатель коментов
    const commentItem = document.querySelector('.settings-item');
    if (commentItem) {
        let commentsOn = false;
        commentItem.style.cursor = 'pointer';

        commentItem.addEventListener('click', function () {
            commentsOn = !commentsOn;
            const status = this.querySelector('span[style*="color"]');
            if (status) {
                status.textContent = commentsOn ? 'Включены' : 'Выключены';
                status.style.color = commentsOn ? '#27ae60' : '#e74c3c';
            }
        });
    }
});