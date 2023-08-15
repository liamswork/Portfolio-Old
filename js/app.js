const $sideNav = $(".sidenav");
let isOpen = false;

function handleNav(){
    if(isOpen === true){
        $sideNav.toggleClass('navbar-expanded');
        isOpen = false;
        console.log("close nav");
    }else if (isOpen === false){
        $sideNav.toggleClass('navbar-expanded');
        isOpen = true;
        console.log("open nav");
    }
}
