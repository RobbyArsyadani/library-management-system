<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = perpustakaan";
   $credentials = "user = postgres password=02062002";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
?>