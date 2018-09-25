<?php 

	include 'db.php';


	if(isset($_GET['ID'])){
	  $product_id = $_GET['ID'];
	} 
    else {
	  echo "failed";
	}


	if ($connection) {
        $query = "SELECT * FROM cards WHERE state = 2 AND boardID = $product_id";
        $result = mysqli_query($connection, $query);

        if ($result){

        	while($row = mysqli_fetch_assoc($result)) {
                echo "<li><a><h2 id='title_2_{$row['ID']}'>{$row['title']}</h2><p id='content_2_{$row['ID']}'>{$row['description']}</p></a></li>";
        	}
        }
        else {
        	echo "ERROR";
        }
    }
?>
