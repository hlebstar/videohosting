document.addEventListener('DOMContentLoaded', () => {
    const titles = {
        videos: 'Видео',
        users: 'Пользователи',
        cats: 'Категории'
    };

    // Переключение вкладок через сайдбар
    document.querySelectorAll('.sidebar-link[data-tab]').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');
            const tab = this.dataset.tab;
            document.getElementById('tab-' + tab).style.display = 'block';

            const title = document.getElementById('admin-title');
            if (title) title.textContent = titles[tab] || tab;
        });
    });

    // Сохранение статуса
    document.querySelectorAll('.btn-save').forEach(btn => {
        btn.addEventListener('click', function () {
            const row = this.closest('tr');
            const id = row.querySelector('.status-sel').dataset.id;
            const status = row.querySelector('.status-sel').value;
            localStorage.setItem('video_status_' + id, status);
            alert(`Статус видео #${id} изменён на: ${status}`);
        });
    });

    // Восстановление статусов
    document.querySelectorAll('.status-sel').forEach(sel => {
        const saved = localStorage.getItem('video_status_' + sel.dataset.id);
        if (saved) sel.value = saved;
    });
});