let prevScrollPos = window.scrollY;
const header = document.getElementById("main-header");
const menuItems = document.querySelectorAll(".menu");

window.onscroll = function () {
    let currentScrollPos = window.scrollY;
    if (prevScrollPos > currentScrollPos) {
        header.style.top = "0";
    } else {
        header.style.top = `-${header.offsetHeight}px`;
    }
    prevScrollPos = currentScrollPos;

    menuItems.forEach((item) => {
        const section = document.getElementById(item.dataset.section);
        const rect = section.getBoundingClientRect();

        if (rect.top <= 100 && rect.bottom >= 100) {
            item.classList.add("active");
        } else {
            item.classList.remove("active");
        }
    });
};
