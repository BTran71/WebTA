<?php 
   function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qltrungtam";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->query("set names 'utf8' ");   
        // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch(PDOException $e) {
            //echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
   }
        
        
?>