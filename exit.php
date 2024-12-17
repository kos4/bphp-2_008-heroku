<?php
session_start();

if (!empty($_SESSION['userName'])) {
  unset($_SESSION['userName']);
}

header('Location: index.php');