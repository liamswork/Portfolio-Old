const $sideNav = $(".sidenav");

function openNav(){
    $sideNav.css("transition", "ease 1s");
    $sideNav.css("width", "100vw");
    $sideNav.show();
    $sideNav.css("z-index", "1000");
}

function closeNav(){
    $sideNav.css("width", "0");
    $sideNav.hide();
}