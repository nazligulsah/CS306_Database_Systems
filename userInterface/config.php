<?php

$db = mysqli_connect('localhost', 'root', '', 'tinder_dog');

if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}