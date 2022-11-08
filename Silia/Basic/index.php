<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <!-------------------
            Exercise 1
        ----------------------->
        <h1>Hello there</h1>
        <p>please insert your information:</p>

        <form method="POST">
            First Name:
            <input type="text" name="firstName">

            Last Name:
            <input type="text" name="lastName">
            <input type="submit" name="submit">
        </form>

        <?php
        # --------------PHP-------------------

        if (isset($_POST['submit'])) {
            if ($_POST['firstName'] && $_POST['lastName']) {
                echo "Welcome " . $_POST['firstName'] . " " . $_POST['lastName'] . "! :)";
            } else {
                echo "<p class='text-danger'>Please insert your first and last name!</p>";
            }
        }
        ?>

        <!-------------------
            Exercise 2
        ----------------------->
        <h2 class="mt-5"> Divide Numbers</h2>

        <?php
        # --------------PHP-------------------
        function divide($num1, $num2)
        {
            return $num1 / $num2;
        }

        $result = divide(5, 2);
        echo $result;
        ?>
        <!-------------------
            Exercise 3
        ----------------------->
        <h2 class="mt-5"> Grades </h2>

        <?php
        # --------------PHP-------------------
        function grades($math, $phy, $eng)
        {
            $sum = $math + $phy + $eng;
            $average = $sum / 3;
            return "Your Sum is: " . $sum . "<br> Your Average is: " . $average;
        }

        $gradesResult = grades(3, 4, 2);
        echo $gradesResult;
        ?>
        <!-------------------
            Exercise 4
        ----------------------->
        <h2 class="mt-5">Volume & Area</h2>
        <p>calulate the volume and area</p>
        <form method="POST">
            Area: <input type="number" name="width">
            Height: <input type="number" name="height">
            Depth: <input type="number" name="depth">
            <input type="submit" name="calculate">
        </form>

        <?php
        # --------------PHP----------------
        if (isset($_POST['calculate'])) {
            if ($_POST['width'] && $_POST['height'] && $_POST['depth']) {

                $area = $_POST['width'] * $_POST['height'];
                $volume = $_POST['width'] * $_POST['height'] * $_POST['depth'];
                echo "Calculated area: " . $area . "<br> Calculated volume: " . $volume;
            } else {
                echo "<p class='text-danger'> You need to insert all 3 numbers! </p>";
            }
        }
        ?>

        <!-------------------
            Exercise 5
        ----------------------->
        <h2 class="mt-5"> Get Hours and Minutes</h2>

        <?php
        # --------------PHP----------------
        function minutes($num)
        {
            $hours = $num / 60;
            $minutes = $num % 60;
            return $num . "minutes = " . $hours . "hour(s) and " . $minutes . "minute(s).";
        }
        $mresult = minutes(400);
        echo $mresult;
        ?>



    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>