<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST select</title>
    <link rel="stylesheet" type="text/css" href="b2_style.css" />
</head>
<body>
<h1 id="header">CRYING UGLY DATA MANAGEMENT SYSTEM</h1>

<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-28
 * Time: 下午8:28
 */

if (isset($_POST['submit'])) {
    $res = $_POST['place'];
    $query = $_POST['query'];

    echo $res . '<br>';
    echo $query . '<br>';

}

?>


</body>
</html>
