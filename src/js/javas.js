let profileDropdownList = document.querySelector(".profile-dropdown-list")
let btn = document.querySelector(".profile-dropdown-btn")
 const toggle1 = ()=> profileDropdownList.classList.toggle("active");

 /*window.addEventListener('click',function(e){
  if(!btn.contains(e.target))profileDropdownList.classList.remove('active')
 });*/
 function cacherMenus() {
  profileDropdownList.classList.remove("active");
  stngdrpdwn.classList.remove("active");
}
document.addEventListener("click", function(event) {
  if (event.target !== prfldrpdwn && event.target !== stngdrpdwn && !profileDropdownList.contains(event.target) && !btn.contains(event.target)) {
    cacherMenus();
  }
});
let subMenu = document.getElementById("subMenu");
function toggleMenu(){
    subMenu.classList.toggle("open-menu")
}


//////blogs////////
    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        mousewheel: {
          invert: false,
        },
        // autoHeight: true,
        pagination: {
          el: '.blog-slider__pagination',
          clickable: true,
        }
      });



      ///////reponsive navbar

const menuHamburger = document.querySelector(".menu-hamburger")
const navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile-menu')
})

////////////////bttn scroll 
var btnTop = document.getElementsByClassName("gotopbtn")[0];
window.onscroll = function() {
if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    btnTop.style.display = "block";
} else {
    btnTop.style.display = "none";  
}
};
const prfldrpdwn = document.querySelector(".profile-dropdown-list-item.parametres")
const stngdrpdwn = document.querySelector(".setting_dropdown_menu")
  prfldrpdwn.addEventListener('click',()=>{
  stngdrpdwn.classList.toggle('active')
})
const prfldrpdwn_mobile = document.querySelector(".sub-menu-link.parametres")
const stngdrpdwn_mobile = document.querySelector(".setting_dropdown_menu_mobile")
  prfldrpdwn_mobile.addEventListener('click',()=>{
  stngdrpdwn_mobile.classList.toggle('active')
})
window.addEventListener('click',function(e){

  if(!prfldrpdwn_mobile.contains(e.target))stngdrpdwn_mobile.classList.remove('active')
  })
  window.addEventListener('click',function(e){
  if(!prfldrpdwn.contains(e.target))stngdrpdwn.classList.remove('active')
  })
  window.addEventListener('click',function(e){
  if(!prfldrpdwn_mobile.contains(e.target) && event.target !== user_pic)user_menu_mobile.classList.remove('open-menu')
  })