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
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none'; 
                }
            });
            
          
        });
    }
});

    //Загрузка аватара
    const avatarInput = document.getElementById('avatar-input');
    const btnEditAvatar = document.getElementById('btn-edit-avatar');
    const avatarPreview = document.getElementById('avatar-preview');

    if (btnEditAvatar && avatarInput && avatarPreview) {
        btnEditAvatar.addEventListener('click', () => {
            avatarInput.click();
        });

        avatarInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;

            if (!file.type.startsWith('image/')) {
                alert('Пожалуйста, выберите картинку (JPG или PNG)');
                return;
            }

            if (file.size > 2 * 1024 * 1024) {
                alert('Картинка должна быть меньше 2 МБ');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {

                avatarPreview.innerHTML = `<img src="${e.target.result}" alt="Аватар">`;
            };
            reader.readAsDataURL(file);
        });
    }