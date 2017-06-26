let menuBtn = document.getElementById('menuBtn');
let menu = document.getElementById('header-nav');
let menuList = document.getElementById('menu-list');
console.log(menuBtn);

menuBtn.addEventListener('click', toggleMenu);
menuList.addEventListener('click', toggleMenu);

function toggleMenu() {
    menu.classList.toggle('close');
    console.log("jeje");
}

