let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.menu');
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");
/**mostra a listinha */
const toggle = () =>
    profileDropdownList.classList.toggle("active");
/**c tirar o foco remove a lista */
window.addEventListener("click", function (e) {
    if (!btn.contains(e.target)) profileDropdownList.classList.remove("active")
});

menu.onclick = () => {
    navbar.classList.toggle('active');
    menu.classList.toggle('move');
    bell.classList.remove('active');
}

let bell = document.querySelector('.notification');

document.querySelector('#bell-icon').onclick = () => {
    bell.classList.toggle('active');
}

var swiper = new Swiper(".trending-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        760: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1068: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});

window.onscroll = function () {
    muFunction();
};

function muFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById('scroll-bar').style.width = scrolled + "%";
}