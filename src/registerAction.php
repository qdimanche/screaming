<?php
if ($_POST['firstName'] && $_POST['lastName'] && $_POST['email'] && $_POST['password']) {
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $db = new PDO('mysql:host=localhost; dbname=screaming; charset=UTF8', 'root', '');
    $checkEmail = $db->prepare("SELECT * FROM user WHERE email = '$email'");
    $checkEmail->execute();
    $count = $checkEmail->rowCount();
    if ($count == 0) {
        $insert = "INSERT INTO user(first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
        $query = $db->prepare($insert);
        $query->execute();
        header("location:index.php");


        $check = $db->prepare("SELECT * FROM user");
        $check->execute();
        $data = $check->fetch();


        $_SESSION['email']= $data['email'];
        $_SESSION['firstname']= $data['first_name'];
        $_SESSION['lastname']= $data['last_name'];
        $_SESSION['id']= $data['id'];


    } else {
        echo "Cet email est déjà utilisé";
    }
} else {
    echo "Veuillez remplir le formulaire de connexion";
}
?>