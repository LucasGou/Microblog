<?php 
include('includes/haut.inc.php');
include('includes/connexion.inc.php');
?>


<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">              
                <form method="post" action="message.php">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>                        
                </form>
            </div>
                        
            
<?php
             $messageparpage = 5 ;

      $sql="SELECT * FROM messages ORDER BY date desc";

  $req = $pdo->prepare($sql);
  $req->execute();
  $array = $req->fetchALL();
  $nb_lignes = count($array);
  $nb_pages=ceil($nb_lignes/$messageparpage);

  if(isset($_GET['page']))
  {
       $pageActuelle=intval($_GET['page']);

       if($pageActuelle>$nb_pages)
       {
            $pageActuelle=$nb_pages;
       }
  }
  else
  {
       $pageActuelle=1;
  }

  $premiereEntree=($pageActuelle-1)*$messageparpage;

  $retour_messages=" SELECT * FROM messages ORDER BY date desc LIMIT $premiereEntree, $messageparpage";

      $stmt=$pdo->query($retour_messages);
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
      echo 'Page : ';
  for($i=1; $i<=$nb_pages; $i++)
  {
       if($i==$pageActuelle)
       {
           echo $i;
       }
       else 
       {
            echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
       }
  }
?>
            
        </div>
    </section>

<?php include('includes/bas.inc.php'); 
     ?>
