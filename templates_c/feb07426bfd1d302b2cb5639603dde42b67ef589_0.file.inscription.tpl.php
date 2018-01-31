<?php
/* Smarty version 3.1.30, created on 2018-01-31 18:14:08
  from "/Applications/MAMP/htdocs/Microblog/Vue/inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71f960b08a30_46096991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb07426bfd1d302b2cb5639603dde42b67ef589' => 
    array (
      0 => '/Applications/MAMP/htdocs/Microblog/Vue/inscription.tpl',
      1 => 1517417598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/haut.inc.php' => 1,
    'file:../includes/bas.inc.php' => 1,
  ),
),false)) {
function content_5a71f960b08a30_46096991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../includes/haut.inc.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['erreur']->value) {?>

<?php echo '<script'; ?>
 src="vendor/jquery/jquery.js"> <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-danger" >un champ est deja utilisé</p>');
                return false;
                
            }
        });
    });

<?php echo '</script'; ?>
>

     <!--  <div class="alert alert-danger" role="alert">   
           
            Nom ou email déjà utilisé ! Veuillez réessayer
           
        </div>   -->      
        
    <?php } else { ?>
        
        

<?php echo '<script'; ?>
 src="vendor/jquery/jquery.js"> <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-success" >INSCRIPTION REUSSI</p>');
        return false;
            }
        });
    });

<?php echo '</script'; ?>
>

<!-- <div class="alert alert-success" role="alert">Cest parfait vous pouvez vous connecter </div> -->  
            
           
        
    <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['vide']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['vide']->value) {?>
       <!-- <div class="alert alert-danger" role="alert">   
           
            Un champ n'est pas rempli
           
        </div> -->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.js"> <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
$('#warning').html('<p class="alert alert-danger" >un champ est manquant</p>');
                return false;
            }
        });
    });

<?php echo '</script'; ?>
>

    <?php }?>
    <?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:../includes/bas.inc.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
