
  var hamburger = document.querySelector(".hamburger");
  hamburger.addEventListener("click", function() {
    console.log(event);
    hamburger.classList.toggle("is-active");
  });

const $sideNav = $(".sidebar");
const $mainWrapper = $(".main-wrapper")
const $overlay = $(".overlay")

let isOpen = false;

function handleNav(){
    let distanceDown = (window.scrollY)*-1;
    if(isOpen === true){
        $sideNav.toggleClass('navbar-expanded');
        $mainWrapper.toggleClass('navbar-expanded');
        $overlay.toggleClass('shown');
        document.body.classList.toggle('navbar-expanded');
        isOpen = false;
        console.log("close nav");
    }
    else if (isOpen === false)
    {
        document.body.classList.toggle('navbar-expanded');
        $sideNav.toggleClass('navbar-expanded');
        $mainWrapper.toggleClass('navbar-expanded');
        $overlay.toggleClass('shown');
        isOpen = true;
        console.log("open nav");
    }
}
