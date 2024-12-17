<?php
session_start();

if (!empty($_SESSION['userName'])) {
  echo 'Привет ' . $_SESSION['userName'];
  echo '<br/>';
  echo '<a href="./exit.php">Выход</a>';
} else {
  include './markup.html';
}