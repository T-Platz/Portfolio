<?php
    session_start();

    header("Content-Type: image/png");
    readfile("../../data/cv{$_SESSION["show_cv"]}.png");
?>