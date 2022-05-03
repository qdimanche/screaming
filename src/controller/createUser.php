<?php
    if($_POST['email'] && $_POST['username' ]&& $_POST['firstName'] && $_POST['lastName'] && $_POST['password'] ){
          $username = $_POST['username'];
          $password = $_POST['password'];
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $email = $_POST['email'];
          $type = $_POST['type'];
          $date = date('Y-m-d H:i:s');
          $db = new PDO('mysql:host=localhost;dbname=screaming','root','');
          $sql = "SELECT * FROM `user`";
          $result = $db->prepare($sql);
          $result->execute();
          $row=$result->fetch(PDO::FETCH_ASSOC);

          $sql = "INSERT INTO `user` (username, first_name, last_name, password, email, role, registration_date) VALUES ('$username', '$password', '$firstName', '$lastName', '$email', '$type', '$date')";
          $query = $db->prepare($sql);
          $result = $query->execute();
          if($result){
              header('Location: ../view/index.php');
          }else{
              header('Location: ../inscription.php?error=create');
          }
      }
      else{
      header('Location: ../inscription.php?error=form');
    }

?>