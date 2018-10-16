<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST select</title>
    <link rel="stylesheet" type="text/css" href="select_style.css" />
    <script src="download_control.js" type="text/javascript"></script>
</head>
<body>
<h1 id="header">CRYING UGLY DATA MANAGEMENT SYSTEM</h1>

<div id="description"></div>
<div id="debug"></div>
<?php

if (isset($_POST['submit'])) {
    $place = $_POST['place'];
    $query = $_POST['query'];

    $query = str_replace('*', 'dicom_instance_path', $query);
    $python_file = 'download_copy.py';
    #$shell_query = "python '$python_file' '$place' '$query'";
    #$output = shell_exec($shell_query);

    echo "<div id=\"place\" style='display: none'>$place</div>";
    echo "<div id=\"query\" style='display: none'>$query</div>";
    echo "<div id=\"unmount\"></div>";


}
?>
</body>
</html>
