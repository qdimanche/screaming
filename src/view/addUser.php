<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');
?>


<form class="formulaire" action="../controller/createUser.php" method="post">

  <div>
    <span for="exampleFormControlInput2">Email : </span>
    <input type="text" name="email"  class="form-control" id="exampleFormControlInput2" placeholder="Entrez votre mail">
  </div>


    <div>
        <span for="exampleFormControlInput2">Nom : </span>
        <input type="text" name="lastName"  class="form-control" id="exampleFormControlInput2" placeholder="Entrez votre mail">
    </div>


    <div>
        <span for="exampleFormControlInput2">Prénom : </span>
        <input type="text" name="firstName"  class="form-control" id="exampleFormControlInput2" placeholder="Entrez votre mail">
    </div>

  <div>
    <span for="exampleFormControlInput3">Pseudo : </span>
    <input type="text" name="username"  class="form-control" id="exampleFormControlInput3" placeholder="Entrez votre pseudo">
  </div>

  <div>
      <select class="box-input" name="type" id="type" >
        <option value="" disabled selected>Type</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
  </div>

  <div>
    <span for="exampleFormControlInput4">Mot de passe: </span>
    <input type="password" name="password"  class="form-control" id="exampleFormControlInput4" placeholder="Entrez un mot de passe">
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