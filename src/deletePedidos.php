<?php
    $conn = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    $id = $_GET['id'];
    $sql = "DELETE FROM Pedidos WHERE ID='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        Header("Location: pedidosClientes.php");
    }
?>