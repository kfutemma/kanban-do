    <?php 

        include 'db.php';

        ini_set('display_erros', 1);
        error_reporting(E_ALL);

        if(isset($_GET['title_board'])){
            $title = $_GET['title_board'];
            $column1 = $_GET['coluna1'];
            $column2 = $_GET['coluna2'];
            $column3 = $_GET['coluna3'];
          } else {
            echo "failed";
          } 
        

        if ($connection) {

            $query  = "INSERT INTO boards(name, first_column, second_column, third_column) VALUES('$title', '$column1', '$column2', 'column3');";
            $query2 = "SELECT ID FROM boards ORDER BY ID DESC LIMIT 1";
            
            $result  = mysqli_query($connection, $query);
            $result2 = mysqli_query($connection, $query2);
            
            $row = mysqli_fetch_assoc($result2);

            if ($result) {
                header('Location: /index.php?ID={$row["ID"]}');
            } else {
                echo "Ops! Something's wrong...";
            }
        } 
        else {
            echo "deu ruim";
        } 

    ?>