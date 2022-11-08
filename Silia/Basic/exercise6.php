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
        <form method="POST">
            First Name:<input type="text" name="firstName">
            Last Name:<input type="text" name="lastName">
            Age:<input type="text" name="age">
            <input type="submit" name="submit" value="enter">

        </form>


        <?php
        function printResult()
        {
            if (strlen($_POST['firstName']) > 5) {
                echo  "<div>
                <h4>First Name:</h4>
                <p class='text-success'>{$_POST['firstName']}</p>
            </div>
            <div>
                <h4>Last Name:</h4>
                <p class='text-success'>{$_POST['lastName']}</p>
            </div>
            <div>
                <h4>Age:</h4>
                <p class='text-success'>{$_POST['age']}</p>
            </div>";
            } else {
                echo  "<div>
                <h4>First Name:</h4>
                <p class='text-warning'>{$_POST['firstName']}</p>
            </div>
            <div>
                <h4>Last Name:</h4>
                <p class='text-warning'>{$_POST['lastName']}</p>
            </div>
            <div>
                <h4>Age:</h4>
                <p class='text-warning'>{$_POST['age']}</p>
            </div>";
            }
        }
        if (isset($_POST['submit'])) {
            if ($_POST['firstName'] && $_POST['lastName'] && $_POST['age']) {
                printResult();
            } else {
                echo "<p class='text-danger'> please enter your information! </p>";
            }
        }

        ?>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>