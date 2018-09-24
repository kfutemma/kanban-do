    <?php 

        include 'db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        if(isset($_GET['add1'])){
            $product_id = $_GET['ID'];
            $title = $_GET['title1'];
            $content = $_GET['content1'];
          } else {
            echo "failed";
          }        

        if ($connection) {

            $query  = "INSERT INTO cards(title, state, description, boardID) VALUES('$title', 1, '$content', $product_id);";
            
            $result  = mysqli_query($connection, $query);
            $result2 = mysqli_query($connection, $query2);
            
            $row = mysqli_fetch_assoc($result2);

            if ($result) {
                header('Location: /index.php?ID='.$product_id);
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        } 

    ?>