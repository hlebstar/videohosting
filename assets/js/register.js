document.getElementById('reg-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let ok = true;

    const login = document.getElementById('login').value.trim();
    const email = document.getElementById('email').value.trim();
    const pass  = document.getElementById('pass').value;
    const pass2 = document.getElementById('pass2').value;

    document.querySelectorAll('.f-err').forEach(el => el.textContent = '');

    if (login.length < 3) {
        document.getElementById('err-login').textContent = 'Минимум 3 символа';
        ok = false;
    }

    if (!email.includes('@') || !email.includes('.')) {
        document.getElementById('err-email').textContent = 'Некорректный email';
        ok = false;
    }

    if (pass.length < 6) {
        document.getElementById('err-pass').textContent = 'Минимум 6 символов';
        ok = false;
    }

    if (pass !== pass2) {
        document.getElementById('err-pass2').textContent = 'Пароли не совпадают';
        ok = false;
    }

    if (ok) {
       
        alert('Валидация прошла! Можно отправлять на сервер');
        
    }
});