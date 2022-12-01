<?php 
      include "./conexion.php"; 
      include "./head.php"; 
      $conexion = conexion(); 
      $sql = "SELECT * FROM paises"; 
      $respuesta = mysqli_query($conexion, $sql);
?>
<br>
<a href="./agregar.php">
            agregar nuevo pais
        </a>
    </p>

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
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $ver['nombre']; ?></th>
                <th><?php echo $ver['continente']; ?></th>
                <th><?php echo $ver['bandera']; ?></th>
              <th><a href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>">eliminar</a></th>
            </tr>
            
          </tbody>
        </table>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>