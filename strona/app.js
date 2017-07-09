let hamburger = document.getElementById('hamburger');
let header = document.getElementById('page-header');
let menuItems = document.getElementsByClassName('menu-item');

function toggleClass(element, clas) {
    element.classList.toggle(clas);
};

hamburger.addEventListener('click', menuClick);
for (let i = 0; i< menuItems.length; i++) {
    menuItems[i].addEventListener('click', menuClick);
}

function changeLogoColor(color) {
    document
        .querySelector(".header-logo")
        .contentDocument
        .getElementById("logo")
        .setAttribute('fill', color)
}

function menuClick() {
    toggleClass(header, 'nav-opened');
    if (header.classList.contains('nav-opened')) {
        changeLogoColor('#000000');
    }
    else {
        changeLogoColor('#FFFFFF');
    }
}
