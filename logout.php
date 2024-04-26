<?php
session_start();

include "path.php";

unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['is_moder']);


header('location: ' . BASE_URL);
