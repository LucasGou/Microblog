{include file='includes/haut.php'}
<br><br><br><br><br><br>
<div class="container">

    <form method="POST" action="recherche.php">
        <div class="col-sm-10">
            <div class="form-group">
              <input type="input" name="requete" class="form-control" placeholder ="Tapez votre recherche" >
          </div></div>
    <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Rechercher</button>
    </div>
    </form>
</div>

<!-- Seul les membres connectés peuvent voir la zone de message-->
  <div class="row">
  	<form method="post" action="includes/insert_verif.php">
  		<div class="col-sm-10">
  			<div class="form-group">
  				<textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
  			</div>
  		</div>

  		<div class="col-sm-2">
  			<button type="submit"  class="btn btn-success btn-lg">Envoyer</button>
  		</div>
  	</form>
  </div>



<!-- Affichage du contenu des messages -->
{foreach from=$tableau item=donnees}
      <!-- Contenu et affichage du message -->
      <blockquote>
          <p>{$donnees.contenu}</p>
          <footer> Message posté le {$donnees.date} par {$donnees.pseudo} </footer>
          </br>
          <!-- Seul l'auteur du message ou l'administrateur peut modifier et supprimer le message-->
              <a href="modifier.php?id={$donnees.idMessage}" class="btn btn-primary" >Modifier</a>
              <a href="supprimer.php?id={$donnees.idMessage}" class="btn btn-danger btn-default">Supprimer</a>
      </blockquote>

{/foreach}


{include file='includes/bas.php'}
