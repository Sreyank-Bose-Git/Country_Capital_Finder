<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Capital Finder</title>
</head>
<body>
    <h1>Country Capital Finder</h1>
    <form action="Country_Capital_Finder.php" method="post">
        <label for="country">Country Selector:</label>
        <select name="country" id="country">
            <option value="invalid">Select an Option</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="South Korea">South Korea</option>
            <option value="Germany">Germany</option>
            <option value="UK">United Kingdom</option>
        </select>
        <br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
    $capitals = array("USA"=>"Washington, D.C.",
                      "India"=>"New Delhi",
                      "South Korea"=>"Seoul",
                      "Germany"=>"Berlin",
                      "UK"=>"London");

    echo "The Capital is ";
    
    switch($_POST["country"]) {
        case "USA":
            echo $capitals["USA"];
            break;
        case "India":
            echo $capitals["India"];
            break;
        case "South Korea":
            echo $capitals["South Korea"];
            break;
        case "Germany":
            echo $capitals["Germany"];
            break;
        case "UK":
            echo $capitals["UK"];
            break;
    }
?>