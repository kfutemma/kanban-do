<?php 

	include 'db.php';

<<<<<<< HEAD
	if ($connection) {
        $query = "SELECT * FROM cards WHERE state = 1";
        //$row = mysql_fetch_row($result);
        $result = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li><a href='#' data-toggle='modal' data-target='#myModal'><h2>{$row['title']}</h2><p>{$row['description']}</p></li>";
=======

	if(isset($_GET['ID'])){
	  $product_id = $_GET['ID'];
	} else {
	  echo "failed";
	}

	if ($connection) {
        $query = "SELECT * FROM cards WHERE state = 1 AND ID = $product_id";
        //$row = mysql_fetch_row($result);
        $result = mysqli_query($connection, $query);

        if ($result){

        	while($row = mysqli_fetch_assoc($result)) {
            echo "<li><a href='index.php?boardID={$row['boardID']}&ID={$row['ID']}' data-toggle='modal' data-target='#myModal'><h2>{$row['title']}</h2><p>{$row['description']}</p></li>";
        	}
        }
        else {
        	echo "ERROR";
>>>>>>> 759416b025f64873c35e50fbdf7f36fc857ea6ad
        }
    }
?>