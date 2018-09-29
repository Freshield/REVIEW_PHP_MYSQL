<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-29
 * Time: 下午5:41
 */

$output = shell_exec('python t10_copytree.py');
echo $output . '<br>';
echo 'end<br>';

?>