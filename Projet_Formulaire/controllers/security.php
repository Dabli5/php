<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['Nameuser'])) {
        $errPrenom = 'Veuillez entrer votre prenom';
    }
    else if (empty($_POST['user'])) {
        $errNom = 'Veuillez entrer votre nom';
    }
    
    else if (empty($_POST['email'])) {
        $errEmail = 'Please enter a valid email address';
    }
    else if (empty($_POST['password']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
        $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
    } 
    else {
        echo "The form has been submitted";
    }
}



?>