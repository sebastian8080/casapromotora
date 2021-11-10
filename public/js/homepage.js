window.addEventListener('scroll', function (e) {
  var nav = document.getElementById('menu');
  if (document.documentElement.scrollTop || document.body.scrollTop > window.innerHeight) {
          nav.classList.add('navbar-light');
          nav.classList.add('bg-light');
          nav.classList.remove('navbar-dark');
      } else {
          nav.classList.add('navbar-dark');
          nav.classList.remove('navbar-light');
          nav.classList.remove('bg-light');
      }
});
