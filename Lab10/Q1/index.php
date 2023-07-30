<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <?php

    $x = 6;
    $y = 4;

    $sum_result = $x + $y;
    $difference_result = $x - $y;
    $product_result = $x * $y;
    $division_result = $x / $y;
    ?>

    <h1>Simple Calculator</h1>
    <p>Sum:
        <?php echo $sum_result; ?>
    </p>
    <p>Difference:
        <?php echo $difference_result; ?>
    </p>
    <p>Product:
        <?php echo $product_result; ?>
    </p>
    <p>Division:
        <?php echo $division_result; ?>
    </p>
</body>

</html>