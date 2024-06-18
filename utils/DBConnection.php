<?php
    require_once('DBConstants.php');

    class DBConnection
    {
        public static function getConn():mysqli
        {
            $conn = new mysqli(DBConstants::$DB_HOST,DBConstants::$DB_USER,DBConstants::$DB_PASSWORD,DBConstants::$DB_NAME);
            return $conn;
        }
    }
?>