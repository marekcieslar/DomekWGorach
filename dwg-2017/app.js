let hamburger = document.getElementById('hamburger');
let header = document.getElementById('page-header');
let menuItems = document.getElementsByClassName('menu-item');

/**
 * to toggle given class for given element
 */

function toggleClass(element, clas) {
    element.classList.toggle(clas);
};

/**
 * to add menu clicks for hamburger and menu items
 */

function addMenuClick() {
    hamburger.addEventListener('click', menuClick);
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].addEventListener('click', menuClick);
    }
}

/** 
 * to remove menu clicks from hamburger and menu items if the screen goes from small to big
 */

function removeMenuClick() {
    hamburger.removeEventListener('click', menuClick);
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].removeEventListener('click', menuClick);
    }
}

if (document.body.clientWidth < 640) {
    addMenuClick();
}

/*
 * needed only when someone is scaling screen
 */

window.addEventListener('resize', (e) => {
    if (e.currentTarget.innerWidth > 639) {
        removeMenuClick();
    } else {
        addMenuClick();
    }
});

/**
 * used when opening the menu
 */
function changeLogoColor(color) {
    let logo = document
        .querySelector(".header-logo")
        .contentDocument
        .getElementById("logo");
    logo.setAttribute('fill', color);
    // some fancy changes with logo :)
    // logo.setAttribute('transform', 'rotate('+rotate+', 141.5, 59) translate(283, 0) scale(-1, 1)');
}

function menuClick() {
    toggleClass(header, 'nav-opened');
    if (header.classList.contains('nav-opened')) {
        changeLogoColor('#000000');
    } else {
        changeLogoColor('#FFFFFF');
    }
}