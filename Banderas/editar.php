<?php 
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET ['idp'];
    $sql = "SELECT * FROM nombres
            where id = '$id'";
    $respuesta =mysqli_query ($conexion, $sql);
    $item= mysqli_fetch_array($respuesta)
?>
<html>
    <h2>actualizar</h2>
    <form action="./backend/actualizar.php" method="post">
        <input type="text" name="id" value=" <?php echo $id; ?> " hidden >
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre'] ?>">
        <br>
        <button>actializar</button>
    </form>
</html>