require('./bootstrap');

let scrollPos = window.scrollY;
const header = document.querySelector("nav");

const addClassOnScroll = () => {
    header.classList.add("bg-light");
    header.classList.remove("py-lg-5");
}

const removeClassOnScroll = () => {
    header.classList.remove("bg-light");
    header.classList.add("py-lg-5");
}

window.addEventListener("scroll", () => {
    scrollPos = window.scrollY;

    if (scrollPos >= header.offsetHeight)
        addClassOnScroll();
    else
        removeClassOnScroll();
});
