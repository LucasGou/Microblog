<?php
include('includes/connexion.inc.php');
$a=$_GET['a'];
    if($a=='sup'){
        $sql="DELETE FROM messages WHERE id=:id";
        $prep=$pdo->prepare($sql);
        $prep->bindvalue(':id',$_GET['id']);
        $prep->execute();
        header("location:index.php");
        exit;
    }

?>