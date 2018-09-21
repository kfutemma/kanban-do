<?php

    #var_dump($_POST['submit_cadastro']);

    if (isset($_POST['submit_cadastro'])) {
       
        #-- databases keys
        $host = 'localhost';
        $user_db = 'admin';
        $password_db = 'teste';
        $db_name = 'dsw';

        echo "essa merda"; 
    
        $connection = mysqli_connect($host, $user_db, $password_db, $db_name);
    
        #----------------------------------
        #-- New user form inputs to back-end
        
        $username = $_POST['userName'];
        $email = $_POST['newUserEmail'];
        $psw = $_POST['newUserPsw1'];
        $psw2 = $_POST['newUserPsw2']; 

        
        # Check connection
        if ($connection) {
            echo "Conexão efetuada com sucesso! <br>";

            if ($psw == $psw2){
                $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$psw');";
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
                echo "Senhas não compartíveis.";
            }            
        }
        else {
            echo "A conexão com o banco falhou! <br>";
        }
    }      

    var_dump($_POST['submit_login']);
    if (isset($_POST['submit_login'])) {

		#-- databases keys
        $host = 'localhost';
        $user_db = 'admin';
        $password_db = 'teste';
        $db_name = 'dsw';

         $connection = mysqli_connect($host, $user_db, $password_db, $db_name);

        #----------------------------------
        #-- Login form inputs to back-end
        $username = $_POST['user'];
		$password = $_POST['psw'];

        # Check connection
        if ($connection) {
            echo "Conexão efetuada com sucesso! <br>";

            $query = "SELECT id FROM users WHERE username = '$username' and password = '$password';";	
            $result = mysqli_query($connection, $query);
            $result = mysqli_fetch_row($result);

            if ($result) {
                 header('Location: /index.html'); 
			} else {
			    echo "Ops! Something's wrong...";
			}
    	}  		      
    }
    
    /*
        CREATE DATABASE dsw;

        USE dsw;

        CREATE TABLE users (
            ID int AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(20), 
            email VARCHAR(25), 
            password VARCHAR(20), 
            timestamp TIMESTAMP
        );
    
    */ 
?>