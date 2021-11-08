	
<?php
 
 $host = "localhost";
 $port = 3306;
 $user = "root";
 $password = "";
 $dbname = "bdd_kayak";
  
 $conn = new PDO("mysql:dbname=$dbname;host=$host:$port", $user, $password);

 
 ?>

 