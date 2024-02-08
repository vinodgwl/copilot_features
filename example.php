<?php
#create the php function to get the country fullname with the country code
function getCountry($code) {
    $countries = array('US' => 'United States', 'UK' => 'United Kingdom', 'IN' => 'India');
    return $countries[$code];
}
#call the function with the country code
echo getCountry('US')
// working
?>



