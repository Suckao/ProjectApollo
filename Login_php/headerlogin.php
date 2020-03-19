<?php
session_start();

    if(isset($_POST)){
        if(!empty($_POST['password']) && !empty($_POST['name']) && $_POST['password'] === '1234'){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['isConnected'] = true;
            if($_SESSION['isConnected'] === true){
                Header('Location: http://localhost:8000/PHP_accueil/accueil.php');
            }
        }else {
            $error['password'] = "Ca marche pooooooooooooooooooooooo LOOOOOOOOOOOOOL LOL LOL LOL LOOOOOOOOOL LOL";
        }
    }
?>
<header>
    <div class="title1">
    <h1>Bienvenue à l'embarquement du projet Appolo</h1>
        <form method="post">
  <div class="container">
    <label for="uname"><b>Nom d'embarquement :</b></label>
    <input type="text" placeholder="Passager" name="name" required>

    <label for="psw"><b>Mot de passe :</b></label>
    <input type="password" placeholder="Numéros :" name="password" required>
        
    <button type="submit"><img src="/images/logo_fusée.png" alt="" height="30px" width="30px">Décoller</button>
  </div>
</form>
        <!-- <img src="https://i.pinimg.com/originals/7d/cf/54/7dcf546af59b140cfb6be51a3dddd827.jpg" alt="Embarquement">  -->
        </div>
</header>
    </div>