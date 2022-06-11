const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.burger-menu');
    const navLinks = document.querySelectorAll('.burger-menu li');

    burger.addEventListener('click',() => {
        nav.classList.toggle('nav-active');

            //Animate links
    navLinks.forEach((link, index) => {
        if(link.style.animation){
            link.style.animation = ''
        }else{
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
        }
        });
        //Burger
        burger.classList.toggle('toggle');
    });

}

navSlide();
