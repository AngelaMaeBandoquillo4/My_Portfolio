// MOBILE NAVIGATION

const menuToggle = document.getElementById('menuToggle');
const navbar = document.getElementById('navbar');

menuToggle.addEventListener('click', () => {

    const opened = navbar.classList.toggle('show');

    menuToggle.setAttribute(
        'aria-expanded',
        String(opened)
    );

});

// CLOSE MENU WHEN A LINK IS CLICKED

document.querySelectorAll('.navbar a').forEach(link => {

    link.addEventListener('click', () => {

        navbar.classList.remove('show');

        menuToggle.setAttribute(
            'aria-expanded',
            'false'
        );

    });

});

// ACTIVE NAVIGATION WHILE SCROLLING

const sections = document.querySelectorAll('main section[id]');
const navLinks = document.querySelectorAll('.navbar a');

window.addEventListener('scroll', () => {

    let current = 'home';

    sections.forEach(section => {

        if (window.scrollY >= section.offsetTop - 150) {
            current = section.id;
        }

    });

    navLinks.forEach(link => {

        link.classList.toggle(
            'active',
            link.getAttribute('href') === `#${current}`
        );

    });

});