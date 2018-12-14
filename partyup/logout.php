<?php
session_start();
session_destroy();

    echo "<script type='text/javascript'>alert('Volte sempre!');</script>";
    echo "<script> window.location='index.php';</script>";

?>