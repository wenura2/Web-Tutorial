<!DOCTYPE html>
<html>

<head>
    <title>Fruits Array</title>
</head>

<body>
    <?php

    $fruits = array('Apple', 'Banana', 'Orange', 'Grapes', 'Mango');
    echo "<h1>Fruits Array</h1>";
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>