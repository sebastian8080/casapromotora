window.addEventListener('scroll', function (e) {
  var nav = document.getElementById('menu');
  var menuItem1 = document.querySelector('#menu-item1');
  var menuItem2 = document.querySelector('#menu-item2');
  var menuItem3 = document.querySelector('#menu-item3');
  var menuItem4 = document.querySelector('#menu-item4');
  var menuItem5 = document.querySelector('#menu-item5');
  var menuItem6 = document.querySelector('#menu-item6');

  if (document.documentElement.scrollTop || document.body.scrollTop > window.innerHeight) {
          nav.classList.add('navbar-light');
          nav.classList.add('bg-light');
          nav.classList.remove('navbar-dark');
          
          menuItem1.classList.remove('text-white');
          menuItem2.classList.remove('text-white');
          menuItem3.classList.remove('text-white');
          menuItem4.classList.remove('text-white');
          menuItem5.classList.remove('text-white');
          menuItem6.classList.remove('text-white');
      } else { 
          nav.classList.add('navbar-dark');
          nav.classList.remove('navbar-light');
          nav.classList.remove('bg-light');

          menuItem1.classList.add('text-white');
          menuItem2.classList.add('text-white');
          menuItem3.classList.add('text-white');
          menuItem4.classList.add('text-white');
          menuItem5.classList.add('text-white');
          menuItem6.classList.add('text-white');
      }
});
