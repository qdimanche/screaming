<?php

    session_start();

    function checkAuth(){
        if ($_POST['email'] !== '' && $_POST['password'] !== ''){
            $email = $_POST['email'];
            $password = $_POST['password'];
            try {
                $db = new PDO('mysql:host=localhost; dbname=screaming; charset=UTF8', 'root', '');
                $sql_query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
                $query = $db->prepare($sql_query);
                $query->execute();
                $res = $query->fetch(PDO::FETCH_ASSOC);
                if ($res) {
                    header('Location: index.php');
                    $_SESSION['id']= $res['id'];
                    $_SESSION['email']= $res['email'];
                    $_SESSION['firstname']= $res['first_name'];
                    $_SESSION['lastname']= $res['last_name'];
                } else {
                    echo 'Erreur de login ou mdp';
                }
            } catch (PDOException $e){
            exit($e->getMessage());
        }
    }
}
checkAuth();
?>