let hamburger = document.getElementById('hamburger');
let header = document.getElementById('page-header');
let menuItems = document.getElementsByClassName('menu-link');

function toggleClass(element, clas) {
    element.classList.toggle(clas);
};

hamburger.addEventListener('click', () => {
    toggleClass(header, 'open');
});

// add on click for every link
// need only if it is SPA
for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', () => {
        toggleClass(header, 'open');
    });
}
