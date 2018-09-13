<img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
<img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
<p>Please select the email addresses to delete from the email list and click Remove</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

    if (isset($_POST['submit'])){
        foreach ($_POST['todelete'] as $delete_id){
            $query = "delete from email_list where id = $delete_id";
            mysqli_query($dbc, $query);
        }
        echo "Customer removed <br/>";
    }

    $query = "select * from email_list";
    $result = mysqli_query($dbc, $query);

    while ($row = mysqli_fetch_array($result)){
        echo '<input type="checkbox" value="' .
            $row['id'] . '" name="todelete[]" />';
        echo $row['first_name'];
        echo ' ' . $row['last_name'];
        echo ' ' . $row['email'];
        echo '<br/>';
    }
    mysqli_close($dbc);

    ?>
    <input type="submit" name="submit" value="Remove"/>
</form>
