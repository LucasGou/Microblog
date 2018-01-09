<?php
echo '<br><br><br><br><br><br>';
include('includes/haut.inc.php');
include('includes/connexion.inc.php');
if(isset($_POST['requete']) && $_POST['requete'] != NULL){

    $requete = htmlspecialchars($_POST['requete']);
    $req = $pdo->prepare("SELECT * FROM messages WHERE contenu LIKE :requete ");
    $req->execute(array('requete' => '%' . $requete . '%'));


    $nb_resultats = $req->rowCount();
    if($nb_resultats != 0){ 

    ?>
    <blockquote><h3>Résultats de votre recherche.</h3>
    <p>Nous avons trouvé 
    <?php 
    echo $nb_resultats;
    if($nb_resultats > 1) { echo ' résultats'; } else { echo ' résultat'; } 
    ?></p></blockquote>
    <section>
        <div class="container">
    <?php
    while($donnees = $req->fetch())
    {
      echo "<blockquote>";
      echo $donnees['contenu'];
      echo "<br><br>";
      date_default_timezone_set("Europe/Paris");
      echo "<footer>";
      echo "Message posté le ";
      echo date("d/m/y à H:i",$donnees['date']);
      echo "</footer>";
      echo "</blockquote>";
    }
    ?><section>
        <div class="container">
            <br/>
    <br/>
    <a href="recherche.php">Faire une nouvelle recherche</a></p>
    <?php
    } // Fin d'affichage des résultats
    else
    {
    ?>
    <blockquote><h3>Pas de résultats</h3>
    <p>Nous n'avons trouvé aucun résultat pour votre requête "<? echo $_POST['requete']; ?>". <a href="recherche.php">Réessayez</a> avec autre chose.</p></blockquote>
    <?php
    }// fin de l'affichage des erreurs
    $req->closeCursor(); // on ferme mysql
    }
?>