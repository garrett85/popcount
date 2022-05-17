<!DOCTYPE html>
<?php
include_once "./lib/inc-functions.php";

if(!isset($_SESSION)) { init_session(); }
$kpuserobj = $_SESSION["kpuserobj"];
$kpMACuser = $kpuserobj->GetName();
?>
$_SESSION["USER"] = $php_var_user;
$php_var_user = $_SESSION["USER"];



<?php
include_once "./lib/inc-functions.php";
init_session();

if(($_SESSION["kpuserobj"]->IsLoggedIn()))
{
    if($_SESSION["dbobj"]->DBconnected() != true)
    {
        header("Location: profile.php");
        exit;
    }
}
else
{
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
...
