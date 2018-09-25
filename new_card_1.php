    <?php 

        include 'php_scripts/db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        if(isset($_POST['title1'])){
            $title = $_POST['title1'];
            $content = $_POST['content1'];
            $boardID = $_COOKIE['id'];
          } else {
            echo "failed";
          }        

        if ($connection) {

            $query  = "INSERT INTO cards(title, state, description, boardID) VALUES('$title', 1, '$content', '$boardID');";
            
            $result = mysqli_query($connection, $query);

            if ($result) {
                header('Location: /index.php');
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        } 

    ?>