<?php
session_start();

if (!empty($_POST['userName'])) {
  $_SESSION['userName'] = $_POST['userName'];
}

header('Location: ./index.php');
