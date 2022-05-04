<?php

    session_start();
    if (!isset($_SESSION['email']))
        header('location:login.php');

    $email = $_SESSION['email'];
    $firstName = $_SESSION['firstname'];
    $lastName = $_SESSION['lastname'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $id = $_SESSION['id'];
  
?>

<form class="formulaire" action="../controller/updateUserProcess.php" method="post">

  <div>
    <span>Email : </span>
    <input type="text" name="email" value="<?php echo $email ?>" class="form-control"  placeholder="Entrez votre mail">
  </div>

    <div>
        <span>Prénom :</span>
        <input type="text" name="firstName" value="<?php echo $firstName ?>" class="form-control"  placeholder="Entrez votre prénom">
    </div>

    <div>
        <span>Nom :</span>
        <input type="text" name="lastName" value="<?php echo $lastName ?>" class="form-control"  placeholder="Entrez votre nom">
    </div>

    <div>
    <span>Pseudo : </span>
    <input type="text" name="username" value="<?php echo $username ?>" class="form-control"  placeholder="Entrez votre pseudo">
  </div>

  <div>
    <span>Mot de passe : </span>
    <input type="password" name="password" value="<?php echo $password ?>" class="form-control" placeholder="Entrez un mot de passe">
  </div>
  <div class="formButton">
      <button type="submit"  class="btn btn-primary">Envoyer</button>
  </div>
</form>

<style>
  .title{
  color: blue;
  font-size: 25px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-transform: uppercase;
}
.subtitle {
  font-size: 16px;
  text-transform: capitalize;
}
.formulaire {
  margin-top: 30px;
}

.formulaire > div{
    margin-bottom: 20px;
    width: 600px;
    display: flex;
}

.formulaire > div > span{
  width: 150px;
}

.formButton{
  display: flex;
  justify-content: center;
  width: 100%;
}

@media screen and (max-width: 768px)
{
    .title{
      color: green;
    }
    .formulaire > div{
      display: flex;
      flex-direction: column;
    }
    .exemple{
      margin-top: 66px;
    }
    h5{
      padding: 1em;
    }
}
</style>