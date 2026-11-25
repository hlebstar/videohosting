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
    } else if (video.size > 100 * 1024 * 1024) { // 100 МБ
        document.getElementById('err-video').textContent = 'Максимум 100 МБ';
        ok = false;
    }

    if (ok) {
        alert('Валидация прошла! Можно отправлять на сервер');
        // this.submit();
    }
});