<?php
class Office {
    public $key, $name, $dates, $comment;
    
    function __construct($key, $name){
        $this->$key = $key;
        $this->$name = $name;
        $query = Manager::$database->db->prepare("SELECT * FROM Dates WHERE NAME LIKE '$name'"); # Todo: adjust query 2 day ago.
        $query->execute();
        $this->$dates = $query->fetch(PDO::FETCH_ASSOC);
    }
}

?>