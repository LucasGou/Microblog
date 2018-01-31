{include file='../includes/haut.inc.php'}


<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">INSCRIPTION</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>
<br>
    <!-- Formulaire d'inscription -->
    <div class="row">
        <div class="col-sm-3"></div>
        <div style="text-align: center;background-color: #2C3E50; padding: 20px; color : white" class="col-sm-6">

            <h1>Créer un compte </h1>
            <form action="inscription.php" id="target" method="post">
                <!-- nom -->
                <p id="nom">Nom</p>
                <input type="name" id="nom" class="form-control" name="nom" placeholder="Nom">

                <!-- email -->
                <p id="mail">Email</p>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                <br />
                <!-- Mot de passe -->
                <p id="password">Mot de passe</p>
                <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                <br />
                <!-- Bouton -->
               <div id="warning"></div>
                <button class="btn btn-success" type="submit"> Inscription </button>
            </form>
        </div>
    </div>
    <br>

    <!-- AFFICHAGE DES ERREURS DE SAISIE-->
    {if isset($erreur)}
    {if $erreur}

<script src="vendor/jquery/jquery.js"> </script>

<script type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-danger" >un champ est deja utilisé</p>');
                return false;
                
            }
        });
    });

</script>

     <!--  <div class="alert alert-danger" role="alert">   
           
            Nom ou email déjà utilisé ! Veuillez réessayer
           
        </div>   -->      
        
    {else}
        
        

<script src="vendor/jquery/jquery.js"> </script>

<script type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-success" >INSCRIPTION REUSSI</p>');
        return false;
            }
        });
    });

</script>

<!-- <div class="alert alert-success" role="alert">Cest parfait vous pouvez vous connecter </div> -->  
            
           
        
    {/if}
    {/if}

    {if isset($vide)}
    {if $vide}
       <!-- <div class="alert alert-danger" role="alert">   
           
            Un champ n'est pas rempli
           
        </div> -->
<script src="vendor/jquery/jquery.js"> </script>

<script type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-danger" >un champ est manquant</p>');
                return false;
            }
        });
    });

</script>

    {/if}
    {/if}

{include file='../includes/bas.inc.php'}
