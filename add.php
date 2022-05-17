<?php

require_once('includes/database.php');

if(isset($_POST['name']) && isset($_POST['number']) && isset($_POST['facility']))
{
    //$connection = get_db_connection();
    $query = $connection->query("INSERT INTO inmate_board (full_name, tdoc_number, facility) VALUES ($_POST[name], $_POST[number], $_POST[facility]");
}
?>



<form action='' method='post'>
<table>
  <tr>
    <th>Name</th>
    <th>TDOC Number</th>
    <th>Facility</th>
  </tr>
  <tr>
    <input type='text' name='name' id='name'>
  </tr>
  <tr>
    <input type='text' name='number' id='number'>
  </tr>
  <tr>
    <input type='text' name='facility' id='facility'></form>
    <input type='submit' value='Submit'></form>
  </tr
</table>
