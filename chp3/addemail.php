<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-13
 * Time: 下午2:16
 */

$dbc = mysqli_connect(
    'localhost', 'root', '8888',
    'elvis_store') or die('Error connecting to MySQL server.');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list (first_name, last_name, email) " .
    "VALUES ('$first_name', '$last_name', '$email')";

mysqli_query($dbc, $query) or die('Error querying database.');

echo 'Customer added.';

mysqli_close($dbc);

?>