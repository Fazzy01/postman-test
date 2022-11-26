<?php
    header("content-Type: application/json");

    // function isValidEmails($str) {
    //     return filter_var($str, FILTER_VALIDATE_EMAIL);
    // }

    $response = array();

    //Validate Email
    if(!isset($_POST["emails"])){
        $response["status"] = "error";
        $response["message"] = "Email Required";
        echo json_encode($response);
        exit();
    }

    //Get Emails
    $response["status"] = "success";
    $emails = explode(",",$_POST["emails"]);
    $j = 1;

    for($i=0; $i<COUNT($emails); $i++){
        $response["email".$j] = $emails[$i];
        $j++;
    }

    //Verify Email
    

    //Return Emails
    echo json_encode($response);
    exit();

    /*
    //$emails = (isset($_POST["emails"]) && is_array($_POST["emails"])) ? 
    //$_POST["emails"] : [];

    $emails = (isset($_POST["emails"])) ? 
    $_POST["emails"] : ;

    $valid_emails = array_filter($emails, "isValidEmails");

    
    //echo json_decode($valid_emails);
    print_r($emails);

    
    */

?>