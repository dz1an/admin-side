<?php

// for user and student validation (for now)
function validate_first_name($POST){
    if(!isset($POST['fn'])){
        return false;
    }else if(strlen(trim($POST['fn']))<1){
        return false;
    }
    return true;
}

// for user and student validation (for now)
function validate_last_name($POST){
    if(!isset($POST['ln'])){
        return false;
    }else if(strlen(trim($POST['ln']))<1){
        return false;
    }
    return true;
}

function validate_email($POST){
    // Remove all illegal characters from email
    $email = filter_var($POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Separate string by @ characters (there should be only one)
        $parts = explode('@', $email);

        // Remove and return the last part, which should be the domain
        $domain = array_pop($parts);

        // Check domain WMSU
        if (strcmp(strtolower($domain), 'wmsu.edu.ph') != 0)
        {
            return false;
        }
    } else {
        return false;
    }
    return true;
}

function validate_year_level($POST){
    if(!isset($POST['level'])){
        return false;
    }else if(strcmp($POST['level'], 'None') == 0){
        return false;
    }
    return true;
}

function validate_college($POST){
    if(!isset($POST['college'])){
        return false;
    }else if(strcmp($POST['college'], 'None') == 0){
        return false;
    }
    return true;
}

function validate_role($POST){
    if(!isset($POST['role'])){
        return false;
    }
    return true;
}

function validate_add_user($POST){
    if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_email($POST) || 
        !validate_year_level($POST) || !validate_college($POST) || !validate_role($POST)){
        return false;
     }
    return true;
}

//end user validation (I probably need some adjustment later on. waiting for the erd to begin doing legit db)