<?php
session_start();

print_r($_SESSION);


// если логин и пароль верны — показываем стартовую внутреннюю страницу
if (isset($_SESSION["id"]) && $_SESSION["id"] === true) {
    header('location: ' . BASE_URL);
    exit;
}
