<?php

    var_dump($_POST);

    if (isset($_POST['submit1'])) {

        $host = 'localhost';
        $user_db = 'mathcas';
        $password_db = 'mathcas';
        $db_name = 'dsw';
        $username = $_POST['user'];
        $psw = $_POST['psw'];

        $connection = mysqli_connect($host, $user_db, $password_db, $db_name);

        // Check connection
        if ($connection) {
            echo "Conexão efetuada com sucesso! <br>";

            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES('$username', '$psw');";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                $error = mysqli_error();
                echo "Erro: ".$error ,"<br />";
                die('Inclusão do usuário falhou!' .mysqli_error());
            }
            else {
                echo "Inclusão efetuada: ". $query;
            }
        }
        else {
            echo "Deu ruim";
        }
    }    
?>