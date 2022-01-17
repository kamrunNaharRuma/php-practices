<!DOCTYPE html>
<html>

<body>
    <?php
    $food = ["bhaat", "gorur mangsho", "halim"];

    $array_length = count($food);

    for ($count = 0; $count < $array_length; $count++) {
        echo $food[$count];

        echo "<br>";
    }
    ?>
</body>

</html>