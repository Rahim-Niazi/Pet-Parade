const bar = document.getElementById ('bar');
const close = document.getElementById ('close');
const nav = document.getElementById ('navbar');

if (bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })  
}

if (close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })  
}

    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        $('.back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
    });