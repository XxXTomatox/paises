<?php 
      include "./conexion.php"; 
      include "./head.php"; 
      $conexion = conexion(); 
      $sql = "SELECT * FROM paises"; 
      $respuesta = mysqli_query($conexion, $sql);
?>
<br>
<a class="btn btn-primary" href="./agregar.php" role="button">agregar nuevo pais</a>

<div class="container">
  <div class="row">
    <div class="col">
      <br>   
        <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col">pais</th>
              <th scope="col">continente</th>
              <th scope="col">bandera</th>
              <th>actualizar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
          <?php while($ver = mysqli_fetch_array($respuesta)):?>
            <tr>
              <th scope="row"><?php echo $ver['nombre']; ?></th>
                <th><?php echo $ver['continente']; ?></th>
                <th><img src="<?php echo $ver['bandera']; ?>" class="img-thumbnail" alt=""></th>
                <td>
                <a class="btn btn-primary" href="./actualizar.php?idp=<?php echo $ver['id']; ?>" role="button">actualizar</a>
              <th>
              <a class="btn btn-primary" href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>" role="button">eliminar</a>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>

