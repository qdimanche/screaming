<?php

    session_start();


     if($_POST['email'] && $_POST['username'] && $_POST['firstName'] && $_POST['lastName'] && $_POST['password'] ){
         $username = $_POST['username'];
         $password = $_POST['password'];
         $firstName = $_POST['firstName'];
         $lastName = $_POST['lastName'];
         $email = $_POST['email'];
         $type = $_POST['type'];
         $id = $_SESSION["id"];
         $db = new PDO('mysql:host=localhost;dbname=screaming','root','');
         $sql = "UPDATE user SET email = '$email', first_name = '$firstName', last_name = '$lastName', username = '$username', password = '$password' WHERE id = '$id' ";

         $query = $db->prepare($sql);
         $result = $query->execute();

         $check = $db->prepare("SELECT * FROM user WHERE id ='$id'");
         $check->execute();
         $data = $check->fetch();


         $_SESSION['username']= $data['username'];
         $_SESSION['email']= $data['email'];
         $_SESSION['firstname']= $data['first_name'];
         $_SESSION['lastname']= $data['last_name'];


         header('Location: ../view/updateUser.php');
    
    }

?>