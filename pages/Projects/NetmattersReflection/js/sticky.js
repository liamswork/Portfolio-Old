/*
This JS file creates a reference to the window elements needed, the main body, to reference our current scroll position.
With these, we;
1.Create an event listener to detect a scroll.
2.Determine whether we are past the buffer zone (this is to prevent the sticky header showing too early. This value can be changed.)
3.If we are past the buffer zone, determine whether we scrolled up or down.
4.Using this, we can display the sticky header (scrolled up) or continue to hide the header (scrolled down)

A quick note;
There are two headers.
".header-default" is the header that always shows at the top of the page.
".header-sticky" is the header that defaults to "display-none", until the previously mentioned conditions are met.
*/

document.addEventListener("DOMContentLoaded", function() {
//Create references to header elements and body of the document (main wrapper).
const stickyHeader = document.querySelector('.header-sticky');
const defaultHeader = document.querySelector('.header-default');
const content = document.querySelector('.main-wrapper');

//Default previous scroll position to window scroll, in case of refresh.
let previousScrollPosition = window.scrollY;    

//Buffer zone. Change the numerical value to alter when the sticky header kicks in.      
const headerHeight = defaultHeader.offsetHeight + 50; 

window.addEventListener("scroll", stickyFunction);
function stickyFunction(event){
    const scrollDistance = window.scrollY; 
    //If we're past the header buffer zone
    if(scrollDistance > headerHeight){
        //console.log("Scroll, past buffer zone")
        if(scrollDistance > previousScrollPosition){
            //console.log("Scrolled down");
            stickyHeader.classList.remove("sticky-shown")
            stickyHeader.classList.add("sticky-hidden")
        }else{
            //console.log("Scrolled up");
            stickyHeader.classList.add("sticky-shown")
            stickyHeader.classList.remove("sticky-hidden")
        }
    }else{
        stickyHeader.classList.remove("sticky-shown")
        stickyHeader.classList.add("sticky-hidden")
    }

    //Update previous scroll position for future checks.
    previousScrollPosition = scrollDistance;
    }
  });