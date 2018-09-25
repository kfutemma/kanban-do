    <?php 
   
        include 'php_scripts/db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        
        $title = $_POST['title1'];
        $content = $_POST['content1'];
        $boardID = $_COOKIE['id'];        

        var_dump($connection);
        mysqli_autocommit($connection,TRUE);
        
        $query  = "INSERT INTO cards(title, state, description, boardID) VALUES('$title', 1, '$content', '$boardID');";
            
        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: index.php?ID='.$boardID);
            mysqli_close($connection);
        } else {
            echo "Ops! Something's wrong...";
        }
    ?>