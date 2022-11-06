<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOBASICS2 : Bicycles and cars and trucks</title>
</head>

<body>

    <?php

    require '../src/Vehicle.php';
    require '../src/Car.php';

    ?>
    <h2> CAS FREIN A MAIN SUR ON </h2>

    <?php

    $mini = new car('blue', 5, 'electric', 'mini');

    try {
        $mini->start();
    } catch (Exception $e) {
        echo 'Exception received  : ' . $e->getMessage() . '<br/>';
        $mini->setParkBrake(false);
        echo 'ParkBrake now on OFF <br/>';
    } finally {
        echo "Ma voiture roule comme un donut" .  '<br/>';
    }

    ?>
    <h2> CAS FREIN A MAIN SUR OFF </h2>

    <?php

    $peugeot = new car('blue', 5, 'electric', 'The Car');
    $peugeot->setParkBrake(false);

    try {
        $peugeot->start();
    } catch (Exception $e) {
        echo 'Exception received  : ' . $e->getMessage() . '<br/>';
        $peugeot->setParkBrake(false);
        echo 'ParkBrake now on OFF <br/>';
    } finally {
        echo "Ma voiture roule comme un donut" .  '<br/>';
    }

    ?>


</body>

</html>