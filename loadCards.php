<?php 

	include 'db.php';

	$jsonData = array();

	if ($connection) {

            $query = "SELECT ID, title, state, description FROM cards;";
			$result = mysqli_query($connection, $query);

            if ($result) {
                    while ($array = mysqli_fetch_row($result)) {
	    				$jsonData[] = $array;
					}
				echo json_encode($jsonData);
	
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        } 

?>
