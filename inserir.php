    <?php 
        include 'db.php';

        /*
        $host = 'localhost';
        $user_db = 'admin1';
        $password_db = 'admin';
        $db_name = 'dsw';
    
        $connection = mysqli_connect($host, $user_db, $password_db, $db_name);*/

        ini_set('display_erros', 1);
        error_reporting(E_ALL);
        
  
        
        $title1 = $_POST['title1'];
        $content1 = $_POST['content1'];
        $code1 = $_POST['code1'];
        # Check connection

        if ($connection) {

            $query = "INSERT INTO cards(title, state, description, boardID) VALUES('$title1', 1, '$content1', '$code1');";
            $result = mysqli_query($connection, $query);

            if ($result) {
                    //header('Location: /index.html'); 
                    echo 'ok';
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        } 

    ?>