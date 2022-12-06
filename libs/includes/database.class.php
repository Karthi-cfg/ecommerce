<?php

class database{

private static $conn = null;
    public static function get_dbconnection()
    {

        if(database::$conn == null)
        {
            $servername = "mysql.selfmade.ninja";
            $Username   =  "Karthi";
            $password   =  "4tA@UgzLSuh7EJP"; 
            $dbname     =  "Karthi_ecommerce";
        

        $connection = new mysqli($servername,  $Username,  $password,  $dbname);

        if($connection->connect_error)
        {
            die("connection failed..." . $connection->connect_error);
        }

        else
        {

            database::$conn = $connection;

            return database::$conn;
        }
    }else{
            return Database::$conn;
        }
    }
}


?>