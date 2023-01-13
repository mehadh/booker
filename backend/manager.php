<?php
require_once("classes/office.php");
require_once("classes/database.php");
class Manager {
    public static $offices;
    public static $database;

    public static function setup(){
        self::$database = new Database();
        $csv = array_map("str_getcsv", file(__DIR__."/offices.csv"));
        foreach($csv as $key=>$office){
            self::$offices[$key] = new Office($key, $office[0]);
        }
    }
    
}

?>