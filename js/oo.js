
let $time = $('.time');
let oo = false;
const brickPath = "img/placeholder-bg2.png";
const gnomePath = "img/gnome.jpg";
//Reference to background element.
const $backgroundImage = $('.background-image');
var audio = new Audio("the-fastest-gnome-in-the-west.mp3");


function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();

    m = checkTime(m);
    s = checkTime(s);
    $time.text(`${h} : ${m} : ${s}`);

    if(s == '00' && oo === false){
        //console.log("OO");
        oo = true;
        //GNOME HERE
        $backgroundImage.attr("src",`${gnomePath}`);
        audio.play();
    }

    if(s == '01' && oo === true){
        //console.log("YOU HAVE BEEN UN-OO'D");
        oo = false;
        //GNOME GONE AGAIN
        $backgroundImage.attr("src",`${brickPath}`);
    }
    setTimeout(startTime, 1000);
  }


  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }

setInterval(startTime,1000);