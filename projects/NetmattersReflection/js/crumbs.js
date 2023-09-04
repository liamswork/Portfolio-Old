//Create referenctransicrumbes to buttons and crumb box.
const crumbButton = document.querySelector('.crumb-settings-btn');
const crumbAccept = document.querySelector('.crumb-accept')
const crumbConsent = document.querySelector('#crumbconsent')

//Reference to local storage.
const isButtonClicked = localStorage.getItem('crumbsAccepted');

$(document).ready(function(){
    if (isButtonClicked){
        crumbConsent.style.display = "none";
        document.body.classList.remove('crumbs-open');
        console.log("crumbs have already been accepted.");
    }else{
        crumbConsent.style.display = "flex";
        //Check to ensure flex style is added.
        //Popup blocker can stop this, only freeze the page when display === flex.
        if(crumbConsent.style.display === "flex"){
            document.body.classList.add('crumbs-open');
        }
        console.log("crumbs have not been accepted before.");
    }
});

//crumb listeners
crumbButton.addEventListener("click", opencrumbs);
crumbAccept.addEventListener("click", closecrumbs);

//crumb handlers
function closecrumbs(){
    console.log("crumb accept button clicked");
    crumbConsent.style.display = "none";
    document.body.classList.remove('crumbs-open');
    localStorage.setItem('crumbsAccepted', true);
}

function opencrumbs(){
    //console.log("crumb button clicked");
    crumbConsent.style.display = "flex";
    //Check to ensure flex style is added.
        //Popup blocker can stop this, only freeze the page when display === flex.
    if(crumbConsent.style.display === "flex"){
        document.body.classList.add('crumbs-open');
    }
}
