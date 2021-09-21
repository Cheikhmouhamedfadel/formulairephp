<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background-color: rgba(12,173,200);
        
    }
    label {
        font-size: 22px;
        display: inline-block;
        min-width: 200px;
        text-align: left;
        font-weight: bolder;
       
    }
    
    input {
        height: 30px;
        margin-top: 5px;
    }
    .taille{
        font-size: 22px;
        display: inline-block;
        font-weight: bolder;
        min-width: 200px;
    }
    h3{
        color: #aa3329;
    }
    fieldset{
       padding-left: 4rem;
       margin:3rem ;
       font-size:25px;
       width:50%;
    }
   
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>

        <h2>Formulaire de Contact.</h2>
        <fieldset>
            <legend>Contact</legend>
        <form method="post" action="">

            <label for=" prenom">Entrer votre prenom:</label>
            <input type="text" name="prenom" value="<?php if(isset($_POST["prenom"])){echo $_POST["prenom"];}?>"  require="" >
            
            <br>
            <label for="nom">Entrer votre nom:</label>
            <input type="text" name="nom"  value="<?php if(isset($_POST["nom"])){echo $_POST["nom"];}?>"  require="">
            <br>
            <label for="age">Entrer votre age:</label>
            <input type="number" name="age" min=1 value="<?php if(isset($_POST["age"])){echo $_POST["age"];}?>"  require="">
            <br>
            <label for="mail">Entrer votre mail:</label>
            <input type="email" name="mail"  value="<?php if(isset($_POST["mail"])){echo $_POST["mail"];}?>"  require="">
            <br>

            <label for="addresse">Addresse:</label>
            <input type="text" name="addresse" value="<?php if(isset($_POST["addresse"])){echo $_POST["addresse"];}?>"  require="">
            <br> 
            <label for="message">Message:</label>
            <textarea name="message" id="" cols="40" rows="6"  require=""></textarea>
            <br> <br>
            <label for="envoyer">Cliquez ici!</label>
            <input type="submit" value="envoyer" name="valid">
            <input type="reset" value="supprimer" name="vider">

        </form>
        </fieldset>
 <div class="taille">
 <?php

if(isset($_POST["valid"])){
    if(isset($_POST["vider"])){
    if(isset($_POST["prenom"]) AND isset($_POST["nom"]) AND isset($_POST["age"]) AND isset($_POST["mail"]) AND isset($_POST["addresse"])){
        if(!empty($_POST["prenom"]) AND !empty($_POST["nom"]) AND !empty($_POST["age"]) AND !empty($_POST["mail"]) AND !empty($_POST["addresse"])){
            $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $mail = $_POST["mail"];
    $addresse = $_POST["addresse"];
    $message = $_POST["message"];
   
    echo "<h3><u>verification du traitement des donnees.</u></h3><br/>Ton nom est : <i>$prenom</i> <br/>
     Ton nom est :<i> $nom </i> <br/> T\'es age de :<i> $age</i> <br/>
      Ton mail est :<i> $mail</i> <br/> Tu habites a :<i>$addresse</i> <br/> message saisi :<i>$message</i>";
        } 
        else{
            echo "Veuillez remplir tous les champs.";
        }    
    } 
    
  }
}

 
 

 ?>
 <!-- <?php
//   if(isset($_POST["valid"])){
// if(isset($_POST["prenom"]) && !empty($_POST["prenom"]))
// {
//     echo "MON PRENOM EST : " .$_POST["prenom"]." <br/>";
// }
// if(isset($_POST["nom"]) && !empty($_POST["nom"]))
// {
//     echo "MON NOM EST     :" .$_POST["nom"]. "<br/>";
// }
// if(isset($_POST["age"]) && !empty($_POST["age"]))
// {
//     echo "JE SUIS AGEE DE   : " .$_POST["age"]."<br>";
// }
// if(isset($_POST["mail"]) && !empty($_POST["mail"]))
// {
//     echo "MON EMAIL EST    : " .$_POST["mail"]."<br>";
// }

// if(isset($_POST["tel"]) && !empty($_POST["tel"]))
// {
//     echo "MON CONTACT      : " . $_POST["tel"]."<br>";
// }
// if(isset($_POST["addresse"]) && !empty($_POST["addresse"]))
// {
//     echo "Je m'habite a    : " .$_POST["addresse"]."<br>";
// }
// else{
//         echo "veillez tout remplir";
    
//  }
// }  -->

?>


</div>

</center>

</body>

</html>
                