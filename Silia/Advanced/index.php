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
    <div class="container">
        <header class="text-center">
            <h1>Temperature converter</h1>
            <p>from °F into °C</p>
        </header>
        <form method="POST" class="text-center">
            °F <input type="number" name="fahrenh" class="w-50">
            <input type="submit" name="calculate" value="calculate">
        </form>

        <?php
        #function to convert Fahrenheit into Celcius

        function convert()
        {
            $result = ($_POST['fahrenh'] - 32) * 0.55556;
            echo "<div class='text-center'>{$_POST['fahrenh']} °F is: {$result} °C</div>";
            if ($result <= 5) {
                echo "<div class='text-center text-primary'>brrr, very cold!</div>";
            } else if ($result <= 10) {
                echo "<div class='text-center text-primary'>still cold!</div>";
            } else if ($result <= 15) {
                echo "<div class='text-center text-secondary'>Pleasant</div>";
            } else if ($result <= 20) {
                echo "<div class='text-center text-warning'>nice and warm</div>";
            } else {
                echo "<div class='text-center text-danger'>hot</div>";
            }
        }

        if (isset($_POST['calculate'])) {
            if ($_POST['fahrenh']) {
                convert();
            } else {
                echo "You need to enter something, dummy!";
            }
        }




        ?>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>