<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-practice/13_sessions.php');