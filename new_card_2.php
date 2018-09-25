    <?php 
   
        include 'php_scripts/db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        
        $title = $_POST['title2'];
        $content = $_POST['content2'];
        $boardID = $_COOKIE['id'];
        
        if ($connection) {
            
            $query  = "INSERT INTO cards(title, state, description, boardID) VALUES('$title', 2, '$content', '$boardID');";
            
            $result = mysqli_query($connection, $query);

            if ($result) {
                header('Location: index.php?ID='.$boardID);
                mysqli_close($connection);
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        }
    ?>