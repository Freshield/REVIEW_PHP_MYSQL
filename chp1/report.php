<html>
<head>
    <title>Aliens Abducted Me - Report an Abduction</title>
</head>

<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>


    <?php
    /**
    * Created by PhpStorm.
    * User: freshield
    * Date: 18-9-8
    * Time: 下午1:21
    */
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $alien_description = $_POST['description'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];

    echo 'Thanks for submitting the form.<br />';
    echo 'You were abducted ' . $when_it_happened;
    echo ' and were gone for ' . $how_long . '<br />';
    echo 'Describe them: ' . $alien_description . '<br />';
    echo 'Was Fang there? ' . $fang_spotted . '<br />';
    echo 'Your email address is ' . $email;
    ?>
</body>

</html>
