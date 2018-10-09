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
 * Date: 18-10-8
 * Time: 下午5:44
 */

if (isset($_POST['submit'])) {
    $place = $_POST['place'];
    $disk = '/media/freshield/' . $place;
    echo $disk;
//    $output = shell_exec("sudo umount /media/freshield/Data_2T");
}
?>
</body>
</html>
