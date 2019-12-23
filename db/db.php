<?php
    class db
    {
        public $conn;
        function __construct()
        {
            // Create connection
            $this->conn = new mysqli("localhost", "root", "", "tottenham");
        }
    }
?>