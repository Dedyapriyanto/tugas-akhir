// Toggle tema dan ikon
document.getElementById('theme-toggle').addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    const sun = document.querySelector('.sun');
    const moon = document.querySelector('.moon');

    if (document.body.classList.contains('dark-mode')) {
        sun.style.display = 'none';
        moon.style.display = 'inline';
    } else {
        sun.style.display = 'inline';
        moon.style.display = 'none';
    }
});

// Animasi scroll masuk
const sections = document.querySelectorAll('section');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.2
});

sections.forEach(section => {
    observer.observe(section);
});