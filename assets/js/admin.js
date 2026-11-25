// переключение вкладок
document.querySelectorAll('.tab').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');
        document.getElementById('tab-' + this.dataset.tab).style.display = 'block';
    });
});

//сохранение статуса
document.querySelectorAll('.btn-save').forEach(btn => {
    btn.addEventListener('click', function() {
        const row = this.closest('tr');
        const id = row.querySelector('.status-sel').dataset.id;
        const status = row.querySelector('.status-sel').value;
        alert(`Статус видео #${id} изменён на: ${status}`);
        //потом доабвить апи
    });
});