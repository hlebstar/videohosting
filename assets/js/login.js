document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let ok = true;

    const login = document.getElementById('login').value.trim();
    const pass  = document.getElementById('pass').value;

    document.querySelectorAll('.f-err').forEach(el => el.textContent = '');

    if (login.length < 3) {
        document.getElementById('err-login').textContent = 'Введите логин или email';
        ok = false;
    }

    if (pass.length < 6) {
        document.getElementById('err-pass').textContent = 'Минимум 6 символов';
        ok = false;
    }

    if (ok) {
      
        alert('Валидация прошла! Можно отправлять на сервер');
        
    }
});