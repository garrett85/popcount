<?php
session_start();

function get_db_connection()
{

    try
    {
        $db_connection = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, DB_USER, PASSWORD);
        $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br />";
        die("Database connection failed.");
    }
    
    return $db_connection;

    //$_SESSION['connection'] = $db_connection;
}

?>
