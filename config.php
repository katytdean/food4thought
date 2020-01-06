<?php

session_start();

$host = "remotemysql.com:3306"; /* Host name */
$user = "xRhMVsD0BL"; /* User */
$password = "RDVI6g3CEc"; /* Password */
$dbname = "xRhMVsD0BL"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}