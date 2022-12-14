<?php 
    $conn = new mysqli("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    $descripcion = $_POST['Descripcion'];
    $marca = $_POST['Marca'];
    $color = $_POST['Color'];
    $numero = $_POST['Talla'];
    $cantidad = $_POST['Cantidad'];
  
    if(mysqli_connect_errno()){
        echo "<script>alert('Este sitio esta presentando problemas.');</script>";
        include("inventario.php");
    }else{
        $consulta1 = $conn->query("SELECT * FROM Descripcion WHERE Descripcion='$descripcion'");
        $row1 = mysqli_fetch_array($consulta1);
        $aux1 = $row1['IDdescripcion'];

        $consulta2 = $conn->query("SELECT * FROM Marca WHERE Marca='$marca'");
        $row2 = mysqli_fetch_array($consulta2);
        $aux2 = $row2['IDmarca'];

        $consulta3 = $conn->query("SELECT * FROM Colores WHERE Color='$color'");
        $row3 = mysqli_fetch_array($consulta3);
        $aux3 = $row3['IDcolor'];

        $codigo = $aux1.$aux2.$aux3;
        $conn->set_charset("utf8");
        $conn->autocommit(false);

        if(isset($_POST['btnAdd'])){
            $registrar = "INSERT INTO Inventario(Codigo,Descripcion,Marca,Color,Talla,Cantidad) 
            VALUES('$codigo','$descripcion','$marca','$color','$numero','$cantidad')";
            $conn->query($registrar);
            $conn->commit();
            include("inventario.php");
        }
        
        if(isset($_POST['btnCancel'])){
            $conn->rollback();
            include("inventario.php");
        }
    }

?>