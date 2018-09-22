<?php 

	include 'db.php';


	if(isset($_GET['ID'])){
	  $product_id = $_GET['ID'];
	} else {
	  echo "failed";
	}

	if ($connection) {
        $query = "SELECT first_column FROM boards WHERE ID = $product_id";
        //$row = mysql_fetch_row($result);
        $result = mysqli_query($connection, $query);

        if ($result){

        	while($row = mysqli_fetch_assoc($result)) {
            	echo "{$row['first_column']}";
        	}
        }
        else {
        	echo "ERROR";
        }
    }
?>