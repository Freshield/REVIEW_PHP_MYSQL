<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-29
 * Time: 下午8:12
 */

//$time =  date("h:i:sa");
//echo "<p> $time</p>";

$dbc = mysqli_connect(
    'localhost', 'root', '8888',
    'linkingmed_bj') or die('Error connecting to MySQL server.');

$query = "select * from temp_log";
$result = mysqli_query($dbc, $query) or die('Error querying.');


while ($row = mysqli_fetch_array($result)) {
    $log = $row['log'];
    echo $log . '<br/>';
}

mysqli_close($dbc);

?>