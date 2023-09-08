<?php
include __DIR__ . '/classi.php';
session_destroy();
header('Location: home.php');
?>