<?php
//start or resume session, destroy it, return to index
    session_start();
    session_destroy();
    echo "<script>window.open('index.php','_self')</script>";
?>