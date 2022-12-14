<?php   
    $stars = $_POST['star'];
    $comment = $_POST['comment'];

    $mysqli = new mysqli("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    if(mysqli_connect_errno()){
        echo "<script>alert('Este sitio esta presentando problemas.');</script>";
        include("comments.php");
    }else{
        $mysqli->set_charset("utf8");
        $mysqli->autocommit(false);
        
        if(isset($_POST['btnComment'])){
            $registrar = "INSERT INTO Comentarios(Estrellas,Comments) VALUES('$stars','$comment')";
            $mysqli->query($registrar);
            $mysqli->commit();
            include("comments.php"); 
        }
        if(isset($_POST['btnCancel'])){
            $mysqli->rollback();
            include("comments.php");
        }
    }
?>