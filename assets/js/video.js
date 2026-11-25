let liked = false;
let disliked = false;

document.getElementById('btn-like')?.addEventListener('click', function() {
    if (liked) return;
    const el = document.getElementById('likes');
    el.textContent = parseInt(el.textContent) + 1;
    liked = true;
});

document.getElementById('btn-dislike')?.addEventListener('click', function() {
    if (disliked) return;
    const el = document.getElementById('dislikes');
    el.textContent = parseInt(el.textContent) + 1;
    disliked = true;
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

    const user = document.createElement('strong');
    user.className = 'com-user';
    user.textContent = 'Вы';

    const date = document.createElement('span');
    date.className = 'com-date';
    date.textContent = 'только что';

    const p = document.createElement('p');
    p.className = 'com-text';
    p.textContent = text; 

    item.appendChild(user);
    item.appendChild(date);
    item.appendChild(p);

    list.prepend(item);

    document.getElementById('com-text').value = '';
});