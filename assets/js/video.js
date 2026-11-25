document.getElementById('btn-like')?.addEventListener('click', function() {
    const el = document.getElementById('likes');
    el.textContent = parseInt(el.textContent) + 1;
});

document.getElementById('btn-dislike')?.addEventListener('click', function() {
    const el = document.getElementById('dislikes');
    el.textContent = parseInt(el.textContent) + 1;
});

document.getElementById('com-form')?.addEventListener('submit', function(e) {
    e.preventDefault();

    const text = document.getElementById('com-text').value.trim();
    const err  = document.getElementById('err-com');

    err.textContent = '';

    if (text.length < 2) {
        err.textContent = 'Минимум 2 символа';
        return;
    }

    const list = document.getElementById('com-list');
    const item = document.createElement('div');
    item.className = 'com-item';
    item.innerHTML = `
        <strong class="com-user">Вы</strong>
        <span class="com-date">только что</span>
        <p class="com-text">${text}</p>
    `;
    list.prepend(item);

    document.getElementById('com-text').value = '';
});