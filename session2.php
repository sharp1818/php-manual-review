<?php

    session_start();


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Session2</title>
    </head>
    <body>
        <h3>
            <?php echo"hello my name is: ".$_SESSION['username']." my age is: ".$_SESSION['age']." and favorite color is: ".$_SESSION['fcolor'];?>
        </h3>
    </body>
    </html>