<?php 

	include 'db.php';

	if ($connection) {
        $query = "SELECT * FROM cards WHERE state = 2";
        //$row = mysql_fetch_row($result);
        $result = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li><a href='#' data-toggle='modal' data-target='#myModal'><h2>{$row['title']}</h2><p>{$row['description']}</p></li>";
        }
    }
?>