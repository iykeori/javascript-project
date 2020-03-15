<?php
    //retrieve all fields into variables
    //?field1=ghi&field2=hdhuuiid&
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msgSubject = $_POST["msgSubject"];
    $message = $_POST["message"];
   

    //set a flag
    $errors = 0;

    if (empty($name)) { $errors = 1; }
    if (empty($email)) { $errors = 2; }
    if (empty($msgSubject)) { $errors = 3; }
    if (empty($message)) { $errors = 4; }
    

    if ($errors == 0) {
        echo "valid";
    } else {
        echo "There are errors: $errors";
    }

    
















?>