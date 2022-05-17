<?php

require_once('init.php');

class Inmate
{

    private $inmate_property = array('first_name' => '', 'last_name' => '', 'full_name' => '', 'race' => '', 'tdoc_number' => 0, 'facility' => '', 'type_of_transit' => '');

    public function __construct($result)
    {
        foreach($result as $key => $value)
        {
            $this->inmate_property[$key] = $value;
        }

    }

    public function get_property($property)
    {
        return $this->inmate_property[$property];
    }

    public function set_property($property, $value)
    {
        $this->inmate_property[$property] = $value;
    }

    public static function get_inmates($type)
    {        
        if($type == 'SEG')
            $sql = "SELECT * FROM inmate_board WHERE type='PUN' OR type='PH'";
        else
            $sql = "SELECT * FROM inmate_board WHERE type='$type'";

        $connection = get_db_connection();
        $inmates = array();

        $query = $connection->query($sql);

        while($result = $query->fetch(PDO::FETCH_ASSOC))
        {
            array_push($inmates, new Inmate($result));
        }

        return $inmates;
    }
}

?>
