document.addEventListener('DOMContentLoaded', () => {
    console.log('Скрипт my-videos.js загружен');

    const menuBtn = document.getElementById('user-menu-btn');
    const dropdown = document.getElementById('user-dropdown');

    if (menuBtn && dropdown) {
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.toggle('show');
        });
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target) && e.target !== menuBtn) {
                dropdown.classList.remove('show');
            }
        });
    }

    const searchInput = document.getElementById('video-search');
    const tableBody = document.getElementById('video-table-body');
    
    if (searchInput && tableBody) {
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const rows = tableBody.querySelectorAll('tr');
            let visibleCount = 0;

            rows.forEach(row => {
                // Ищем текст в заголовке видео
                const titleElement = row.querySelector('.table-vid-title');
                if (!titleElement) return;

                const text = titleElement.textContent.toLowerCase();

                if (text.includes(query)) {
                    row.style.display = ''; // Показываем
                    visibleCount++;
                } else {
                    row.style.display = 'none'; // Скрываем
                }
            });
            
            // Обновляем счетчик внизу таблицы (опционально)
            const footerText = document.querySelector('.table-footer span');
            if (footerText) {
                footerText.textContent = `Строк на странице: 30 · Показано ${visibleCount} из ${rows.length}`;
            }
        });
    }
});