<?php 
// simple logout system by using session destroy and redirecting to the index
    session_destroy();
    header('location: index.php');
