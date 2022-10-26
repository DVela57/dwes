<?php
    session_start();
    session_destroy();
    setcookie(session_name(), '', time() -7200, '/');
    header("Location: login.php");