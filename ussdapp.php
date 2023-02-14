<?php

// get the value of the USSD request
$ussdrequest = $_REQUEST['text'];

// initialize the response
$response = "";

// check the value of the USSD request
if($ussdrequest == "") {
  // if it's the first request, show the menu
  $response = "CON Welcome to the USSD Application\n";
  $response .= "1. Option 1\n";
  $response .= "2. Option 2\n";
  $response .= "3. Option 3\n";
} else if($ussdrequest == "1") {
  // if the user selected option 1, show the next menu
  $response = "CON You selected option 1\n";
  $response .= "1. Sub-option 1\n";
  $response .= "2. Sub-option 2\n";
  $response .= "3. Sub-option 3\n";
} else if($ussdrequest == "1*1") {
  // if the user selected sub-option 1, show the final message
  $response = "END You selected sub-option 1\n";
} else if($ussdrequest == "1*2") {
  // if the user selected sub-option 2, show the final message
  $response = "END You selected sub-option 2\n";
} else if($ussdrequest == "1*3") {
  // if the user selected sub-option 3, show the final message
  $response = "END You selected sub-option 3\n";
} else if($ussdrequest == "2") {
  // if the user selected option 2, show the final message
  $response = "END You selected option 2\n";
} else if($ussdrequest == "3") {
  // if the user selected option 3, show the final message
  $response = "END You selected option 3\n";
}

// return the response
echo $response;

?>
