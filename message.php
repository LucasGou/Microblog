<?php
include('includes/connexion.inc.php');

$sql="INSERT INTO messages (contenu,date) VALUES (:contenu, UNIX_TIMESTAMP())";
$prep=$pdo->prepare($sql);
$prep->bindvalue(':contenu',$_POST['message']);
$prep->execute();
header("location:index.php");
exit;
?>