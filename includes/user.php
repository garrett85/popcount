<?php

if(!isset($_SESSION)) { init_session(); }

class User
{
    public $name;

    public function __construct($username, $password)
    {
        
        $connection = get_db_connection();
        $query = $connection->query("SELECT * FROM users WHERE username='$username' AND password='$password'"); 
        
        if(!$query)
        {
            echo "Invalid username or password";
        }

        else
        {
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if(!$result['username'] == $username || !$result['password'] == $password)
            {
                echo "Invalid username or password";
            }
            else { $this->name = $result['username']; }
        }
    }

    public static function sign_out()
    {
        session_unset();
        session_destroy();
    }

    public static function sign_in($username, $password)
    {
        $_SESSION['user'] = new User($username, $password);
    }
}
?>
