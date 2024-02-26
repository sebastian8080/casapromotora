window.addEventListener('load', function (e) {
    let nav = document.getElementById('menu');
    let menuItem1 = document.querySelector('#menu-item1');
    let menuItem2 = document.querySelector('#menu-item2');
    let menuItem3 = document.querySelector('#menu-item3');
    let menuItem4 = document.querySelector('#menu-item4');
    let menuItem5 = document.querySelector('#menu-item5');

    nav.classList.add('bg-white', 'shadow-sm', 'navbar-light');
    nav.classList.remove('navbar-dark');

    menuItem1.classList.remove('text-white');
    menuItem2.classList.remove('text-white');
    menuItem3.classList.remove('text-white');
    menuItem4.classList.remove('text-white');
    menuItem5.classList.remove('text-white');
  });
  