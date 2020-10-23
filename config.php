<?php
   /*replace parameter's values with your local or remote database values */
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'kuhoo');
   define('DB_PASSWORD', 'kuhoopc');
   define('DB_DATABASE', 'Buggyapp');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
