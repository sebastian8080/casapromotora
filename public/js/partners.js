    var nav = document.getElementById('menu');
    nav.classList.remove('navbar-dark');
    nav.classList.add('bg-white');
    for (let index = 1; index < 7; index++) {
        document.querySelector('#menu-item' + index).classList.remove('text-white');
        document.querySelector('#menu-item' + index).classList.add('text-dark');    
    }
    
  