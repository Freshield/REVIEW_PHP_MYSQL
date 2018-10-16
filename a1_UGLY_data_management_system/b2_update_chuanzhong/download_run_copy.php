<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-28
 * Time: 下午8:28
 */
if (isset($_REQUEST['place'])) {
    $place = $_REQUEST['place'];
    $query = $_REQUEST['query'];

    $query = str_replace('*', 'dicom_instance_path', $query);
    $python_file = 'download_copy.py';
    $shell_query = "/home/freshield/anaconda3/bin/python '$python_file' '$place' '$query'";
    $output = shell_exec($shell_query);

    echo $shell_query . '<br>';
    echo 'temp<br>';
    echo $output . '<br>';

}

?>