<?php
session_start(); 

// unset the session
session_unset();

// destroy the session
session_destroy();

header("Location: /");
?>