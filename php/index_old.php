<?php
require_once 'setting.php';
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('eror conection');

$query = 'SELECT * FROM category';
$result = $connection->query($query);
if (!$result) die('eror conection');

$rows = $result->num_rows;
for ($i = 0; $i < $rows; ++$i) {
    $result->data_seek($i);
    echo 'ID:' . $result->fetch_assoc()['ID'] . '<br>';
    echo 'NAME:' . $result->fetch_assoc()['NAME'] . '<br>';
}

$result->close();
$connection->close();

//echo '<pre>';
//print_r($rows);
//echo '</pre>';
