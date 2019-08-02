window.onload= function(){
const flechaScroll = document.querySelector('.go-top');
const navBar = document.getElementById('navbar');
let sticky = navBar.offsetTop;
// console.log(navBar)
// console.log(flechaScroll)

  window.onscroll = function(){
    scroll()
    navStick()

  }

  function scroll(){
    if ( document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      flechaScroll.classList.remove('hide');
    } else{
      flechaScroll.classList.add('hide');
    }
  }
  function navStick(){
    if (window.pageYOffset > sticky) {
      navBar.classList.add('sticky')
    }else {
      navBar.classList.remove('sticky')
    }
  }

}
