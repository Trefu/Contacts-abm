<?php
include('config/config.php');
$conn = new mysqli(HOST_NAME, USER_DATABASE, PASSWORD_DATABASE, DATABASE_NAME);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
