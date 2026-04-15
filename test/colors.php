<?php
$colors = array("red", "green", "blue");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($colors as $color) { ?>
        <p style="color: <?php echo $color ?>"><?php echo $color ?></p>
    <?php }?>
</body>
</html>