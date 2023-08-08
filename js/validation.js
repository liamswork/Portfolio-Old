function validateForm(){
    //Declare regex patterns. Has a built in .test() function where you pass it a piece of text.
    let emailPattern = /^((?:(?:(?:[a-zA-Z0-9][\.\-\+_]?)*)[a-zA-Z0-9])+)\@((?:(?:(?:[a-zA-Z0-9][\.\-_]?){0,62})[a-zA-Z0-9])+)\.([a-zA-Z0-9]{2,6})$/;
    let namePattern = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/
    let phonePattern = /^(((\+44\s?|0044\s?)?|(\(?0))((2[03489]\)?\s?\d{4}\s?\d{4})|(1[23456789]1\)?\s?\d{3}\s?\d{4})|(1[23456789][234578][0234679]\)?\s?\d{6})|(1[2579][0245][0467]\)?\s?\d{5})|(11[345678]\)?\s?\d{3}\s?\d{4})|(1[35679][234689]\s?[46789][234567]\)?\s?\d{4,5})|([389]\d{2}\s?\d{3}\s?\d{4})|([57][0-9]\s?\d{4}\s?\d{4})|(500\s?\d{6})|(7[456789]\d{2}\s?\d{6})))$/
    
    //Prevent page refresh and clear console for clarity.
    event.preventDefault();
    console.clear();
    console.log("Validating...");

    //Refrence to input boxes. Access value with $fName.val()
    const $fName = $('.contact-form #fname');
    const $lName = $('.contact-form #lname');
    const $email = $('.contact-form #email');
    const $phone = $('.contact-form #phone');
    const $message = $('.contact-form #message');

    //Reference to contact form. Used to append additional error messages.
    const $contactForm = $('form');

    //Various errors we might encounter. We need different errors in case of multiple errors at once.
    let emptyError = "";
    let nameError = "";
    let emailError = "";
    let phoneError = "";

    //Input array
    let inputArray = [$fName.val(), $lName.val(), $email.val(), $phone.val(), $message.val()];
    let inputBoxArray = [$fName, $lName, $email, $phone, $message];

    //Remove previous h3 errors/sucesses.
    const errorHeadings = $('h3.error');
    errorHeadings.remove();
    const successHeadings = $('h3.success');
    successHeadings.remove();

    //If ANY fields are empty.
    for(let i = 0; i < inputArray.length; i++){
        //Check to see if we already have an empty error message. If not, make one and append it.
        if(isEmpty(inputArray[i])){
            if(emptyError == ""){
                emptyError = "None of the fields can be empty.";
                $contactForm.append(`<h3 class="error">${emptyError}</h3>`)
            }
            //Add Error border
            inputBoxArray[i].css("border", "3px solid red");
        }else{
            //Remove error border
            inputBoxArray[i].css("border", "none");
        }
    }

    //If first name pattern is not valid
    if(!namePattern.test($fName.val())){
        //Check to see if we already have a name error. If not, make one and append it.
        if(nameError == ""){
            nameError = "Somethings wrong with the name you put in.";
            $contactForm.append(`<h3 class="error">${nameError}</h3>`)
        }
        //Add Error border
        $fName.css("border", "3px solid red");
    } else {
        //Remove error border
        $fName.css("border", "none");
    }

    //If last name pattern is not valid
    if(!namePattern.test($lName.val())){
        //Check to see if we already have a name error. If not, make one and append it.
        if(nameError == ""){
            nameError = "Somethings wrong with the name you put in.";
            $contactForm.append(`<h3 class="error">${nameError}</h3>`)
        }
        //Add Error border
        $lName.css("border", "3px solid red");
    } else {
        //Remove error border
        $lName.css("border", "none");
    }

    //If email pattern is not valid
    if(!emailPattern.test($email.val())){
        //Add Error message
        emailError = "Incorrect email format.";
        $contactForm.append(`<h3 class="error">${emailError}</h3>`);
        //Add error border
        $email.css("border", "3px solid red");
    } else {
        //Remove error border
        $email.css("border", "none");
    }

    //If phone pattern is not valid
    if(!phonePattern.test($phone.val())){
        //Add Error message
        phoneError = "Incorrect phone format.";
        $contactForm.append(`<h3 class="error">${phoneError}</h3>`);
        //Add error border
        $phone.css("border", "3px solid red");
    } else {
        //Remove error border
        $phone.css("border", "none");
    }
    if(emptyError == "" && nameError == "" && phoneError == "" && emailError == "" ){
        $contactForm.append(`<h3 class="success">Form sent successfully! I'll get back to you as soon as possible.</h3>`);
    }
}

function isEmpty(value){
    if(value === ""){
        return true;
    }else{
        return false;
    }
}





