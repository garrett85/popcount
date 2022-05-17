<?php

require_once('init.php');

//$inmates = Inmate::get_inmates('COURT');
//
//foreach($inmates as $inmate)
//{
//    print $inmate->get_property('first_name') . " "  . $inmate->get_property('last_name') . " " . $inmate->get_property('tdoc_number')  . "<br />";
//}
//
?>

<html>
    <body>
    <br />
    <br />
        <form method='post' action='user.php'>
            Username: <input type='text' name='username'><br /><br />
            Password: <input type='text' name='password'>
            <input type='submit' value='button'>
        </form>
    </body>
</html>
