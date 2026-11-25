// переключение вкладок
document.querySelectorAll('.tab').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');
        document.getElementById('tab-' + this.dataset.tab).style.display = 'block';
    });
});

// сохранение статуса
document.querySelectorAll('.btn-save').forEach(btn => {
    btn.addEventListener('click', function() {
        const row = this.closest('tr');
        const id = row.querySelector('.status-sel').dataset.id;
        const status = row.querySelector('.status-sel').value;

        // Демонстрация: сохраняем в localStorage
        localStorage.setItem('video_status_' + id, status);
        alert(`Статус видео #${id} изменён на: ${status}`);
    });
});

// Восстанавливаем статусы при загрузке
document.querySelectorAll('.status-sel').forEach(sel => {
    const saved = localStorage.getItem('video_status_' + sel.dataset.id);
    if (saved) sel.value = saved;
});