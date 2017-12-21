<?php

require_once('lib/smarty.class.php');
$smarty=new smarty();

$smarty -> assign('var',$var);

include('includes/haut.php');
include('includes/connexion.php');
$smarty -> display('temp.tpl');
include('includes/bas.php');

?>