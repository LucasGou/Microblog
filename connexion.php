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
                        <span class="name">Connexion</span>
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
                                echo "<input type='email' id='email' placeholder='votre e-mail' class='form-control' name='email'></input>";
                                echo "</br>";
                                echo "<input type='password' id='mdp' placeholder='votre mot de passe' class='form-control' name='mdp'></input>";
                                echo "</br>";
                                echo "<input type='checkbox'></input>  Se rappeler de moi";
                                echo "</br>";
                                echo "</br>";
                                echo "<input type='submit' value='Se connecter' class='btn btn-success'></input>";
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
include('includes/bas.inc.php');
?>