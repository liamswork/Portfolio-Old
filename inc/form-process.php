<?php
include "inc/connection.php";

/**
 * FORM VALIDATION
 * 2 Regex patterns, one for email and one for UK telephone numbers.
 * 
 * Empty errors are declared, if they continue to stay empty, the form is successful.
 * Errors are assigned under conditions specific to each field. Email/telephone must be correct format, fname should be letters and whitespace only.
 * All errors are fed back to the user on submission.
 *
 *
*/


//Define variables, set to empty values
$fnameErr = $lnameErr = $emailErr = $telephoneErr = $messageErr = "";
$fname = $lname = $email = $telephone = $message = "";
$success_message = "";
$errorMessage = "Uh oh! The form was not successfully sent: ";
$emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$phonePattern = "/^(((\+44\s?|0044\s?)?|(\(?0))((2[03489]\)?\s?\d{4}\s?\d{4})|(1[23456789]1\)?\s?\d{3}\s?\d{4})|(1[23456789][234578][0234679]\)?\s?\d{6})|(1[2579][0245][0467]\)?\s?\d{5})|(11[345678]\)?\s?\d{3}\s?\d{4})|(1[35679][234689]\s?[46789][234567]\)?\s?\d{4,5})|([389]\d{2}\s?\d{3}\s?\d{4})|([57][0-9]\s?\d{4}\s?\d{4})|(500\s?\d{6})|(7[456789]\d{2}\s?\d{6})))$/";

//Validate inputs and handle empty submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //fname
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required.";
        $errorMessage .= $fnameErr . " ";
    } else {
        $fname = test_input($_POST["fname"]);
        //Validate the name, ensuring it only has letters, dashes, apostrophes, and whitespaces.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameErr = "Only letters and white space allowed.";
            $errorMessage .= $fnameErr . " ";
        }
    }

    //lname
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required.";
        $errorMessage .= $lnameErr . " ";
    } else {
        $lname = test_input($_POST["lname"]);
        //Validate the name, ensuring it only has letters, dashes, apostrophes, and whitespaces.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameErr = "Only letters and white space allowed.";
            $errorMessage .= $lnameErr . " ";
        }
    }

    //Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
        $errorMessage .= $emailErr . " ";
    } else {
        $email = test_input($_POST["email"]);
        //Validate the email, making sure it is well-formed
        if (!preg_match($emailPattern,$email)) {
            $emailErr = "Invalid email format.";
            $errorMessage .= $emailErr . " ";
        }
    }

    //Telephone
    if (empty($_POST["telephone"])) {
        $telephoneErr = "Telephone is required.";
        $errorMessage .= $telephoneErr . " ";
    } else {
        $telephone = test_input($_POST["telephone"]);
        if (!preg_match($phonePattern,$telephone)) {
            $telephoneErr = "Invalid telephone format.";
            $errorMessage .= $telephoneErr . " ";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "A message is required.";
        $errorMessage .= $messageErr . " ";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If there are no errors, ASSIGN a success message that we call later.
    if (
        empty($fnameErr) &&
        empty($lnameErr) &&
        empty($emailErr) &&
        empty($telephoneErr) &&
        empty($messageErr)
    ) {
        $success_message = "Form sent successfully! I'll get back to you as soon as possible.";

        $stmt = $db->prepare(
            "INSERT INTO enquiries (fname, lname, email, telephone, message) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bindParam(1, $fname);
        $stmt->bindParam(2, $lname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $telephone);
        $stmt->bindParam(5, $message);
        $stmt->execute();
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
