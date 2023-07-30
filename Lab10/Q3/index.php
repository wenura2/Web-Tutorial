<!DOCTYPE html>
<html>

<head>
    <title>Electricity Bill Calculator</title>
</head>

<body>
    <h1>Electricity Bill Calculator</h1>
    <form method="post" action="">
        <label for="units">Enter the number of units consumed:</label>
        <input type="text" name="units" id="units">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the number of units from the form
        $units = intval($_POST["units"]);

        // Calculate the electricity bill based on the given conditions
        if ($units <= 50) {
            $bill = $units * 3.50;
        } elseif ($units <= 100) {
            $bill = 50 * 3.50 + ($units - 50) * 4.00;
        } elseif ($units <= 150) {
            $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
        } else {
            $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
        } ?>

        <div style="display:flex; justify-content:center; align-items: center;">
            <?php echo "<p>Your electricity bill for $units units is: Rs. $bill</p>"; ?>
        </div>

        <?php
    }
    ?>
</body>

</html>