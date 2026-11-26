document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('slider-track');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');
    const dotsBox = document.getElementById('slider-dots');

    if (!track || !prevBtn || !nextBtn) return;

    const items = track.querySelectorAll('.carousel-item');
    const total = items.length;

    // Сколько видно за раз
    function getVisible() {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 900) return 2;
        return 3;
    }

    let current = 0;
    let visible = getVisible();
    let maxIndex = Math.max(0, total - visible);

    // Создаём точки
    function buildDots() {
        dotsBox.innerHTML = '';
        for (let i = 0; i <= maxIndex; i++) {
            const btn = document.createElement('button');
            btn.className = 'dot' + (i === current ? ' active' : '');
            btn.addEventListener('click', () => {
                current = i;
                update();
            });
            dotsBox.appendChild(btn);
        }
    }

    function update() {
        visible = getVisible();
        maxIndex = Math.max(0, total - visible);
        if (current > maxIndex) current = maxIndex;

        const itemWidth = items[0].offsetWidth + 16; // gap
        track.style.transform = `translateX(-${current * itemWidth}px)`;

        // Точки
        const dots = dotsBox.querySelectorAll('.dot');
        dots.forEach((d, i) => d.classList.toggle('active', i === current));
    }

    nextBtn.addEventListener('click', () => {
        current = current >= maxIndex ? 0 : current + 1;
        update();
    });

    prevBtn.addEventListener('click', () => {
        current = current <= 0 ? maxIndex : current - 1;
        update();
    });

    window.addEventListener('resize', () => {
        buildDots();
        update();
    });

    buildDots();
    update();

    // Автопрокрутка
    setInterval(() => {
        current = current >= maxIndex ? 0 : current + 1;
        update();
    }, 5000);
});