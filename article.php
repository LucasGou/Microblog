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
/*else{
        $sql="INSERT INTO messages (contenu,date) VALUES (:contenu, UNIX_TIMESTAMP())";
        $prep=$pdo->prepare($sql);
        $prep->bindvalue(':contenu',$_POST['message']);
        $prep->execute();
    }*/
?>