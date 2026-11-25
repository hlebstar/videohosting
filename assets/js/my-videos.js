document.addEventListener('DOMContentLoaded', () => {
    const list = document.getElementById('my-list');
    const empty = list.querySelector('.empty');

    // Делегирование событий для кнопок удаления
    list.addEventListener('click', (e) => {
        const btn = e.target.closest('.btn-del');
        if (!btn) return;

        const card = btn.closest('.vid-card');
        if (!card) return;

        if (confirm('Удалить это видео?')) {
            card.remove();
            checkEmpty();
        }
    });

    function checkEmpty() {
        const cards = list.querySelectorAll('.vid-card');
        if (cards.length === 0) {
            empty.style.display = 'block';
        } else {
            empty.style.display = 'none';
        }
    }

    // Проверяем при загрузке
    checkEmpty();
});