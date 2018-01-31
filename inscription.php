<?php
	include('includes/connexion.inc.php');
	require('smarty/libs/Smarty.class.php');
	$smarty=new Smarty();


	/* CHECK ERREURS*/
	$controle = false ;
if(isset($_POST['email'])){
	$sql='SELECT pseudo, email FROM utilisateurs';
	$stmt=$pdo->query($sql);
	$controle=true;
	while($data=$stmt->fetch())
	{
		if($data['pseudo']==$_POST['nom'] || $data['email']==$_POST['email'])
		{
			$controle=false;
			$smarty->assign('erreur', true);
		}

		if($_POST['nom']=="" || $_POST['email']=="" || $_POST['mdp']=="")
		{
			$controle=false;
			$smarty->assign('vide', true);
		}
	}
}
	/* INSCRIPTION SI ERREUR = OK*/
	if($controle==true)
	{
		$sql = "INSERT INTO utilisateur (pseudo, email, password) VALUES ('{$_POST['nom']}','{$_POST['email']}', :mdp)";
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':mdp', md5($_POST['mdp']));
		$prep->execute();
		$smarty->assign('erreur', false);
	}

	$smarty->display('Vue/inscription.tpl');
?>
