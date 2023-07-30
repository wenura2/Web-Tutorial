<!DOCTYPE html>
<html>

<head>
    <title>Day of the Week</title>
</head>

<body>
    <h1>Day of the Week</h1>
    <form method="post" action="">
        <label for="dayNumber">Enter a number (1 to 7):</label>
        <input type="text" name="dayNumber" id="dayNumber">
        <input type="submit" value="Show Day">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $dayNumber = intval($_POST["dayNumber"]);


        switch ($dayNumber) {
            case 1:
                $dayOfWeek = "Monday";
                break;
            case 2:
                $dayOfWeek = "Tuesday";
                break;
            case 3:
                $dayOfWeek = "Wednesday";
                break;
            case 4:
                $dayOfWeek = "Thursday";
                break;
            case 5:
                $dayOfWeek = "Friday";
                break;
            case 6:
                $dayOfWeek = "Saturday";
                break;
            case 7:
                $dayOfWeek = "Sunday";
                break;
            default:
                $dayOfWeek = "Invalid number";
                break;
        }
        echo "<p>The day of the week for the number $dayNumber is: $dayOfWeek</p>";
    }
    ?>
</body>

</html>