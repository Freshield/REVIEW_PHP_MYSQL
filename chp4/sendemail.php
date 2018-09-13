<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-13
 * Time: 下午2:41
 */

$from = 'elmer@makemeelevis.com';
$subject = $_POST['subject'];
$text = $_POST['elvismail'];


$dbc = mysqli_connect(
    'localhost', 'root', '8888',
    'elvis_store') or die('Error connecting to MySQL server.');

$query = "SELECT * FROM email_list";
$result = mysqli_query($dbc, $query) or die('Error querying.');

while ($row = mysqli_fetch_array($result)) {
    $msg = "Dear ....";
    $to = $row['email'];
    # mail()
    echo 'Email sent to: ' . $to . '<br/>';
}

mysqli_close($dbc);
