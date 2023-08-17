const $sideNav = $(".sidebar");
const $mainWrapper = $(".main-wrapper")
const $overlay = $(".overlay")
let isOpen = false;
let previousHamburger = null;

function handleNav(hamburger){
    if(isOpen){
        //Apply style classes which move the page and close the navbar.
        $sideNav.toggleClass('navbar-expanded');
        $mainWrapper.toggleClass('navbar-expanded');
        $overlay.toggleClass('shown');
        document.body.classList.toggle('navbar-expanded');

        //Remove is-active from hamburger clicked to open the menu.
        previousHamburger.classList.remove('is-active');

        //Cleanup and debug can go here.
        isOpen = false;
    }else{
        //Apply style classes which move the page and open the navbar.
        document.body.classList.toggle('navbar-expanded');
        $sideNav.toggleClass('navbar-expanded');
        $mainWrapper.toggleClass('navbar-expanded');
        $overlay.toggleClass('shown');

        //Add is-active to hamburger that was clicked to start this function.
        hamburger.classList.add('is-active');

        //Cleanup and debug
        isOpen = true;
    }
    previousHamburger = hamburger;
}
