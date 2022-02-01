<?php

    echo date_default_timezone_get();
    echo '<br/>';
    echo date_default_timezone_set('America/Lima');
    echo '<br/>';
    echo date_default_timezone_get();
    echo '<br/>';
    echo date('h:i:s');
    echo '<br/>';
    echo date('a');

?>