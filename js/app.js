const $sideNav = $(".sidenav");
let isOpen = false;

function handleNav(){
    if(isOpen === true){
        $sideNav.css("transition", "0.5 ease");
        $sideNav.toggleClass('navbar-expanded');
        isOpen = false;
        console.log("close nav");
    }else if (isOpen === false){
        $sideNav.css("transition", "0.5 ease");
        $sideNav.toggleClass('navbar-expanded');
        $sideNav.css("z-index", "1000");
        isOpen = true;
        console.log("open nav");
    }
}