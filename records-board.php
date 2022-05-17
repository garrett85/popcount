<?php
require_once('includes/init.php');
if(!isset($_SESSION)) { init_session(); }
?>



<html>
  <head>
    <Title>Pop Report</title>
    <link rel="stylesheet" type="text/css" href="styles/popreport2.css">
    <h1>BCCX Pop Report</h1>
  </head>

<body>
<?php

if($_GET['logout'] == true)
{
    User::sign_out();
}

if(isset($_POST['nameinput']) && isset($_POST['passinput']))
{
    $nameinput = $_POST['nameinput'];
    $passinput = $_POST['passinput'];
    User::sign_in($nameinput, $passinput);
}

if(!isset($_SESSION['user']))
{
    print_form();
}
else
{
    echo '<span id=userlogout>';
    echo $_SESSION['user']->name . ' ';
    echo "<a href='records-board.php?logout=true'>Log Out</a></span>";
}

?>
  <div id='mainblock'>
  <div id='courtscount' class='center'>12</div>
  <table id='courtstable' class='maintable'>
    <tr>
      <th id='courtsheader'>Courts</th>
    </tr>
<?php $inmates = Inmate::get_inmates('COURT'); print_rows($inmates); ?>
<?php add_button(); ?>
  </table>
  <div id='medicalcount' class='center red'>10</div>
  <table id='medicaltable' class='maintable'>
    <tr>
      <th>Medical</th>
    </tr>
<?php $inmates = Inmate::get_inmates('MEDICAL'); print_rows($inmates); ?>
<?php add_button(); ?>
  </table>
  <div id='punitivecount' class='center'>7</div>
  <table id='punativetable' class='maintable'>
    <tr>
      <th>Punative</th>
    </tr>
<?php $inmates = Inmate::get_inmates('SEG'); print_rows($inmates); ?>
<?php add_button(); ?>
  </table>
  <div id='tempscount' class='center'>11</div>
  <table id='temptable' class='maintable'>
    <tr>
      <th>Temporary</th>
<?php $inmates = Inmate::get_inmates('TEMP'); print_rows($inmates); ?>
<?php add_button(); ?>
    </tr>
  </table>
  </div>
</html>
