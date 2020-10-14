<?php
    class Houses {
        function getHouses() {
            global $conn;
            $query = "SELECT * FROM kuce";
            return $conn->query($query)->fetchAll();
        }
      
    }
?>