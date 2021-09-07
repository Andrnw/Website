const navSlide = () => {
    const burger = document.querySelector('.navbar-toggler');
    const nav = document.querySelector('.navbar-nav me-auto mb-2 mb-lg-0');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    })
}

navSlide();