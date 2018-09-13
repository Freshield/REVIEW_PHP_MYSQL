<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-13
 * Time: 下午3:19
 */

$dbc = mysqli_connect(
    'localhost', 'root', '8888',
    'elvis_store') or die('Error connecting to MySQL server.');

$email = $_POST['email'];

$query = "DELETE FROM email_list WHERE email = '$email'";

$result = mysqli_query($dbc, $query) or die('Error querying.');

echo 'Customer removed: ' . $email;

mysqli_close($dbc);

?>