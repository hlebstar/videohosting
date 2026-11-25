let liked = false;
let disliked = false;

document.getElementById('btn-like')?.addEventListener('click', function () {
    if (liked) return;
    const el = document.getElementById('likes');
    el.textContent = parseInt(el.textContent) + 1;
    liked = true;
});

document.getElementById('btn-dislike')?.addEventListener('click', function () {
    if (disliked) return;
    const el = document.getElementById('dislikes');
    el.textContent = parseInt(el.textContent) + 1;
    disliked = true;
});

document.getElementById('com-form')?.addEventListener('submit', function (e) {
    e.preventDefault();

    const input = document.getElementById('com-text');
    const text  = input.value.trim();
    const err   = document.getElementById('err-com');

    err.textContent = '';

    if (text.length < 2) {
        err.textContent = 'Минимум 2 символа';
        return;
    }

    const list = document.getElementById('com-list');
    if (!list) return;

    const msg = document.createElement('div');
    msg.className = 'chat-msg';

    const user = document.createElement('span');
    user.className = 'chat-user';
    user.textContent = 'Вы';

    const txt = document.createElement('span');
    txt.className = 'chat-text';
    txt.textContent = ' ' + text;

    msg.appendChild(user);
    msg.appendChild(txt);

    list.appendChild(msg);
    list.scrollTop = list.scrollHeight;

    input.value = '';
});