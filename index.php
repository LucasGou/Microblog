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
                            
                            <?php
                                $sql="SELECT * FROM messages WHERE id=:id";
                                $content=$data['id'];
                            
                                echo "<textarea id='message' name='message' class='form-control' placeholder='Message'>$content</textarea>";
                                echo "<input type='hidden' name='id' value=' .. '>";
                            ?>
                            
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>                        
                </form>
            </div>
            
            
            
            
            
            
<?php
$sql="SELECT * FROM messages ORDER BY date desc";
$stmt=$pdo->query($sql);
            
while($data=$stmt->fetch()){
    
    $suppr=$data['id'];
    echo "<blockquote>";
    echo $data['contenu'];
    echo "</br></br>";
    echo "<footer> Publié le ";
    echo date("d-m-y à H:m",$data['date']);
    echo "</footer>";
    echo "<a href='article.php?a=sup&id=$suppr' class='btn btn-danger'>Supprimer</a>";
    echo " <a href='index.php?id=$suppr' class='btn btn-primary'>Modifier</a>";
    echo "</blockquote>";

}
?>
            
            
            
            
            
            

            <div class="row">
                <div class="col-md-12">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur <a href="#">#adipiscing</a> elit. Integer posuere erat a ante.</p>
                      <footer>Foo</footer>
                    </blockquote>

                    <blockquote>
                      <p>Sed eu tellus vel lectus <a href="#">@rhoncus</a> maximus. Nam eu turpis ac eros pellentesque tincidunt. Maecenas pellentesque consequat libero</p>
                      <footer>Mauris arcu</footer>
                    </blockquote>

                    <blockquote>
                      <p>Nunc volutpat vel nibh vitae blandit</p>
                      <footer>blandit</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/bas.inc.php'); 
     ?>
