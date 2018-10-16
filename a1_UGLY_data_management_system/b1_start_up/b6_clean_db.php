<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-29
 * Time: 下午8:26
 */

$dbc = mysqli_connect(
    'localhost', 'root', '8888',
    'linkingmed_bj') or die('Error connecting to MySQL server.');

$query = "delete from temp_log";
$result = mysqli_query($dbc, $query) or die('Error querying.');

mysqli_close($dbc);

?>