<?php
     if(isset($_POST['requete']) && $_POST['requete'] != NULL){

    $requete = htmlspecialchars($_POST['requete']);
    $req = $pdo->prepare("SELECT * FROM messages WHERE contenu LIKE :requete "); // la requête, que vous devez comprendre même Lucas
    $req->execute(array('requete' => $requete));


    $nb_resultats = $req->rowCount();
    if($nb_resultats != 0){ 
?>


<?php
    Résultats de votre recherche.
    Nous avons trouvé  1) { echo ' résultats'; } else { echo ' résultat'; } // on vérifie le nombre de résultats correctement.
?>


<?php
    Voici les résultats trouvés :
    fetch())
    {
    while($data=$stmt->fetch()){
    $suppr=$data['id'];
    $mod=$data['id'];
    echo "<blockquote>";
    echo $data['contenu'];
    echo "</br></br>";
    echo "<footer> Publié le ";
    echo date("d-m-y à H:m",$data['date']);
    echo "</footer>";
    echo "<a href='supp.php?a=sup&id=$suppr' class='btn btn-danger'>Supprimer</a>";
    echo " <a href='mod.php?id=$mod' class='btn btn-primary'>Modifier</a>";
    echo "</blockquote>";

}
    }

?>

<?php    

    < a href="recherche.php">Faire une nouvelle recherche< /a>
    
    Pas de résultats
    Nous avons trouvé aucun résultat pour votre requête "". < a href="recherche.php">Réessayez avec autre chose.
    closeCursor();
    }
else
{ // formulaire html
?>