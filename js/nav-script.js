var navLinks=document.getElementById("navLinks");
function hideMenu(){
    navLinks.style.right="-200px";
}
function showMenu(){
    navLinks.style.right="0";
}

const toTop=document.querySelector(".toTop");
window.addEventListener("scroll",()=>{
    // if(window.pageYOffset>100){
    //     toTop.classList.add("active");
    // }
    // else{
    //     toTop.classList.remove("active");
    // }
})

// sticky nav bar
// window.onscroll = function() {stickyNavBar()};
// var navbar = document.getElementById("nav-bar-id");
// var sticky = navbar.offsetTop;
// function stickyNavBar() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }
