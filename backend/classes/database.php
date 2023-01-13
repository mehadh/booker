<?php
   class Database {
    public $db;
      function __construct() {
         $this->db = new PDO("sqlite:booking.db");
         $this->create();
      }

      function create(){
        $this->db->exec(file_get_contents(__DIR__."/../schemes/setup.sql"));
      }
   }
?>