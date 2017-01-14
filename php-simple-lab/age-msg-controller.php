<?php

session_start();

include "age-functions.php";

// Think of the session object and the getAgeMsg function
// as working together forming the model.
//TODO:  Add code to set and populate the ageMessage attribtue of the session object. -\
$message = getAgeMsg($_POST["age"]);
$_SESSION['ageMessage'] = $message;

// The controller will now invoke the view to 
// render the output the will be returned to the client (browser).
// TODO:  Add code to redirect to the view
header('Location: age-msg-view.php');

?>
