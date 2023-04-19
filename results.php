<?php
// Determines if the temperature is hot or cold
$result = "";

// Gets the temperature from the user 
$temperature = $_POST["hot-cold"];

// Displays if the temperature is hot or cold back to user
if ($temperature >= 5) {
  echo "It is hot!";
}
else {
  echo "It is cold!";
}
?>
