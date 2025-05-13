<?php

$conn = mysqli_connect('localhost', 'root', '', 'eccomers');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
