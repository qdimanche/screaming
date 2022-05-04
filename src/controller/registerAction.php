<?php
if ($_POST['firstName'] && $_POST['lastName'] && $_POST['email'] && $_POST['password']) {
    $username= $_POST['username'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $db = new PDO('mysql:host=localhost; dbname=screaming; charset=UTF8', 'root', '');
    $checkEmail = $db->prepare("SELECT * FROM user WHERE email = '$email'");
    $checkEmail->execute();
    $count = $checkEmail->rowCount();
    if ($count == 0) {

        $date = date('Y-m-d H:i:s');
        $insert = "INSERT INTO user(username, first_name, last_name, email, password, registration_date) VALUES ('$username', '$firstName', '$lastName', '$email', '$password', '$date')";
        $query = $db->prepare($insert);
        $query->execute();
        header("location:../view/index.php");


        $check = $db->prepare("SELECT * FROM user");
        $check->execute();
        $data = $check->fetch();


        $_SESSION['email']= $data['email'];
        $_SESSION['username']= $data['username'];
        $_SESSION['firstname']= $data['first_name'];
        $_SESSION['lastname']= $data['last_name'];
        $_SESSION['id']= $data['id'];
        $_SESSION['role']= $data['role'];
        $_SESSION['registration_date']= (date("j M Y",strtotime($data['registration_date'])));


    } else {
        echo "Cet email est déjà utilisé";
    }
} else {
    echo "Veuillez remplir le formulaire de connexion";
}
?>