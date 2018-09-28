<?php
$python_file = '/var/www/html/REVIEW_PHP_MYSQL/a1_UGLY_data_management_system/test/t5_show_dirs.py';
$python_file1 = 't6_example.py';
#header("Content-type: text/html; charset=utf-8");
$output = shell_exec("python $python_file1");

echo "lol,$output<br>";
echo "YY";

$array = explode(',', $output);

foreach ($array as $value) {
#echo "\n";
    echo $value;
    echo "<br>";
}
?>