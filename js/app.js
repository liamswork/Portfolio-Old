const $sideNav = $(".sidenav");
let isOpen = false;

//References for code example buttons. Move to its own file soon.//////////
const codeButton1 = document.getElementById('code1');
const codeButton2 = document.getElementById('code2');
const codeButton3 = document.getElementById('code3');
const codeButton4 = document.getElementById('code4');
const closeButton1 = document.getElementById('close1');
const closeButton2 = document.getElementById('close2');
const closeButton3 = document.getElementById('close3');
const closeButton4 = document.getElementById('close4');

if(codeButton1){
    codeButton1.addEventListener('click', function(event) {
        toggleCodeBlock(1);
    });
    closeButton1.addEventListener('click', function(event) {
        toggleCodeBlock(1);
    });
}
if(codeButton2){
    codeButton2.addEventListener('click', function(event) {
        toggleCodeBlock(2);
    });
    closeButton2.addEventListener('click', function(event) {
        toggleCodeBlock(2);
    });
}
if(codeButton3){
    codeButton3.addEventListener('click', function(event) {
        toggleCodeBlock(3);
    });
    closeButton3.addEventListener('click', function(event) {
        toggleCodeBlock(3);
    });
}
if(codeButton4){
    codeButton4.addEventListener('click', function(event) {
        toggleCodeBlock(4);
    });
    closeButton4.addEventListener('click', function(event) {
        toggleCodeBlock(4);
    });
}

function toggleCodeBlock(blockAddress){
    event.preventDefault();
    const codeBox = document.getElementById(`code-box-${blockAddress}`)
    console.log(codeBox);
    codeBox.classList.toggle("code-block-open");
    console.log("Toggling code block: " + blockAddress);
}
/////////////////////////////////////////////////////////////////////////////


function handleNav(){
    if(isOpen === true){
        $sideNav.toggleClass('navbar-expanded');
        isOpen = false;
        //console.log("close nav");
    }else if (isOpen === false){
        $sideNav.toggleClass('navbar-expanded');
        isOpen = true;
        //console.log("open nav");
    }
}

