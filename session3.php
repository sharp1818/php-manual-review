<?php

    session_start();
    $_SESSION['username'] = "sharp18";
    $_SESSION['age'] = 25;
    
    echo "my new name is: ".$_SESSION['username']."and mi age is: ".$_SESSION['age'];
    echo "<br/>";
    echo "it is now set";

?>