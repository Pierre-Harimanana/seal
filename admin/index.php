<?php
    if (!isset($_SESSION['admin'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/index.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="../js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <h1>Controller</h1>

            <div class="right">
                <input class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logout">Logout</button>
            </div>
        </div>


        <footer>
            <p>Copyright 2023</p>
        </footer>

    </body>
</html>

<script>
    $('#logout').click(function() {
        console.log("go out");
    });
</script>