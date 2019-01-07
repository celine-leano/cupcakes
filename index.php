<?php
/*
 * Celine Leano
 * 1/6/2019
 * 328/cupcakes/index.php
 * Cupcake Fundraiser
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>

    <link rel="stylesheet" type="text/css" href="cupcake.css">
</head>
<body>
<?php
    // define variables
    $name = "";

    // create an associative array
    $cupcakes = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    // validate form
    if (!empty($_POST)) {
        require 'validate.php';
    }
?>
    <form id="cupcake" method="post" action="">
        <fieldset>
            <legend>Full Name</legend>
            <label>
                <input type="text" name="fullName" id="fullName" value="<?php echo $name?>">
            </label>
            <span class="err" id="err-name">
                Please enter your name
            </span>
        </fieldset>
        <fieldset>
            <legend>Type of Cupcake(s)</legend>
                <?php
                    // loop through the array to display options
                    foreach ($cupcakes as $option => $text) {
                        echo "<label><input type='checkbox' value='" . $option . "' name='cupcakes[]'";
                        echo "> " . $text . "</label><br>";
                    }
                ?>
            <span class="err" id="err-cupcake">
                Please choose at least cupcake type
            </span>
        </fieldset>
        <input type="submit" value="Order" id="submit">
    </form>
<script src="validate.js"></script>
</body>
</html>
