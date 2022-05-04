<?php


    $id = $_POST['id'];

    if(isset($id)){
        deleteCategory($id);
    };
    function deleteCategory($id){
        $db = new PDO('mysql:host=localhost;dbname=screaming','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM user WHERE user.id IN ($id)";
        try{
            $query = $db->prepare($sql);
            $query->execute();
            header('Location: ../view/admin.php');
            echo $sql;
        }catch(Exception $e){
            echo 'erreur:' .$e->getMessage();
        }
    }




?>
