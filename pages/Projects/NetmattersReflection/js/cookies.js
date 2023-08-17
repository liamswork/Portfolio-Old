//Create references to buttons and cookie box.
const cookieButton = document.querySelector('.cookie-settings-btn');
const cookieAccept = document.querySelector('.cookie-accept')
const cookieConsent = document.querySelector('#cookieconsent')

//Reference to local storage.
const isButtonClicked = localStorage.getItem('cookiesAccepted');

$(document).ready(function(){
    if (isButtonClicked){
        cookieConsent.style.display = "none";
        document.body.classList.remove('cookies-open');
        //console.log("cookies have already been accepted.");
    }else{
        cookieConsent.style.display = "flex";
        document.body.classList.add('cookies-open');
        //console.log("cookies have not been accepted before.");
    }
});

//Cookie listeners
cookieButton.addEventListener("click", openCookies);
cookieAccept.addEventListener("click", closeCookies);

//Cookie handlers
function closeCookies(){
    console.log("Cookie accept button clicked");
    cookieConsent.style.display = "none";
    document.body.classList.remove('cookies-open');
    localStorage.setItem('cookiesAccepted', true);
}

function openCookies(){
    console.log("Cookie button clicked");
    cookieConsent.style.display = "flex";
    document.body.classList.add('cookies-open');
}
