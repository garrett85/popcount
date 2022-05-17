<?php

function print_rows($inmates)
{
    foreach($inmates as $inmate)
    {
        echo "<tr>";
        echo "<td>";
        echo "<table class='inmatecell'>";
        echo "<tr id='toprow'><td id='name'>{$inmate->get_property('full_name')} ({$inmate->get_property('race')})<br /></td>";
        echo "<td id='number'>{$inmate->get_property('tdoc_number')}<br /></td>";
        echo "<td id='facility'>{$inmate->get_property('facility')}<br /></td></tr>";
        echo "<tr><td>8-05-15 <span class='red'>/</span> 8-08-15</td>";
        echo "<td></td><td id='edit'><a href=''>Edit</a></td></tr></table>";
        echo "</td>";
        echo "</tr>";
    }
}

function print_form()
{
    echo "<form id='loginform' name='loginform' action='records-board.php' method='post'>";
    echo "Username: <input type='text' name='nameinput'>";
    echo "Password: <input type='text' name='passinput'><br />";
    echo "<input type='submit' value='Sign In'>";
    echo "</form>";
}

function add_button()
{
    echo "<tr><td>";
    echo "<form action='add.php'>";
    echo "<input type='submit' value='Add'>";
    echo "</form>";
    echo "</td></tr>";
}
?>
