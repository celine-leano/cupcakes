<?php
/*
 * Celine Leano
 * 1/6/2019
 * 328/cupcakes/index.php
 * Cupcake Fundraiser
 */
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
    <form id="cupcake" method="post" action="#">
        <fieldset>
            <legend>Full Name</legend>
            <label>
                <input type="text" name="fullName" id="fullName">
            </label>
            <span class="err" id="err-name">
                Please enter your name
            </span>
        </fieldset>
        <fieldset>
            <legend>Type of Cupcake(s)</legend>
            <label>
                <?php
                    // create an associative array
                    $cupcakes = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
                        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
                        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

                    // loop through the array to display options
                    foreach ($cupcakes as $option => $text) {
                        echo "<input type='checkbox' value='" . $option . "' name='cupcakes[]'> " . $text . "<br>";
                    }
                ?>
            </label><br>
        </fieldset>
        <input type="submit" value="Order" id="submit">
    </form>
</body>
<script src="validate.js"></script>
</html>
