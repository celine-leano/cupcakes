<?php
/*
 * Celine Leano
 * 1/6/2019
 * 328/cupcakes/validate.php
 * PHP validation
 */

$isValid = true;

// validate name
$name = $_POST['fullName'];
if (empty($name)) {
    echo "Please enter your full name";
} else {
    $isValid = false;
}

// validate cupcake checkboxes
if (!isset($_POST['cupcakes'])) {
    echo "Please select at least one cupcake";
    $isValid = false;
} else {
    $chosen = $_POST['cupcakes'];
}

// if valid
$price = 0;

echo "<p>Thank you $name for your order!</p>";
echo "Order Summary:<br>";
echo "<ul>";
foreach ($chosen as $key) {
    echo "<li>$cupcakes[$key]</li>";
}
echo "</ul>";
echo "Total: $" . number_format(sizeOf($_POST['cupcakes']) * 3.50, 2);