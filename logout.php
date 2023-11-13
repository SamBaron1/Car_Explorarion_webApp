<?php
    require_once 'database/constants.php';
    session_destroy();
    header('location:'.ROOT_URL);
    die();