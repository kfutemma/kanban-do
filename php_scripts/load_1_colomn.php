<?php 

	include 'db.php';


	if(isset($_GET['ID'])){
	  $product_id = $_GET['ID'];
	} 
    else {
	  echo "failed";
	}


	if ($connection) {
        $query = "SELECT * FROM cards WHERE state = 1 AND boardID = $product_id";
        //$row = mysql_fetch_row($result);
        $result = mysqli_query($connection, $query);

        if ($result){

        	while($row = mysqli_fetch_assoc($result)) {
                echo "<li><a onclick='openModal({$row['ID']})'><h2 id='title_1_{$row['ID']}'>{$row['title']}</h2><p id='content_1_{$row['ID']}'>{$row['description']}</p></li>";
        	}
        }
        else {
        	echo "ERROR";
        }
    }
?>