    <?php 
        include 'php_scripts/db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        $title1 = $_POST['title1'];
        $content1 = $_POST['content1'];
        $code1 = $_POST['code1'];
        
        var_dump($connection);

        if ($connection) {

            $query = "INSERT INTO cards(title, state, description, boardID) VALUES('$title1', 1, '$content1', 1);";
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