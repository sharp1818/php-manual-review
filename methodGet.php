<?php

    //server
    //request
    //post
    //get
    //sessions
    //cookies
    if(isset($_GET['lang'] ) AND isset($_GET['coursp']))  {
        $get = $_GET['lang'];
        $coursp = $_GET['coursp'];
        echo "i study: $get";
        echo '<br/>';
        echo "jeje: $coursp";
    }
?>
