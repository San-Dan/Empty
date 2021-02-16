<?php

declare(strict_types=1);

// Start the session engines.
session_start();

// Set the default timezone to Coordinated Universal Time.
date_default_timezone_set('UTC');

// Set the default character encoding to UTF-8.
mb_internal_encoding('UTF-8');

// Fetch global functions
require __DIR__ . '/functions.php';

// PDO connection
$pdo = new PDO('sqlite:' . __DIR__ . '../../hackernews.sqlite');

//die(var_dump($_SESSION['user']));
