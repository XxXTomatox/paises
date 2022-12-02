<?php
    include "./head.php";
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "SELECT * FROM paises WHERE id='$id'";

    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta);
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="cuerpoCard">
                    <div class="body-card">
                        <form action="../backend/actualizar.php" method="post">
                            <input type="text" name="id" value="<?php echo $id;?>" hidden>
                            <label for="pais">Pais</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $item ['nombre']?>">
                            <br>
                            <label for="continente">Continente</label>
                            <select name="continente" id="continente" class="form-select" value="<?php echo $item['continente']?>">
                                <option value="America">America</option>
                                <option value="Europa">Europa</option>
                                <option value="Asia">Asia</option>
                                <option value="Oceania">Oceania</option>
                                <option value="Africa">Africa</option>
                            </select>
                            <br>
                            <label for="" class="text">Bandera</label>
                            <input type="text" name="bandera" id="bandera" class="form-control" placeholder="Vuelve a ingresar el URL de la imagen">
                            <br>
                            <button class="btn btn-success"><i class="fa-solid fa-flag"></i>Actualizar</button>
                        </form>
                        <br>
                        <a href="./index.php"><button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i>Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
<?php include "./footer.php"; ?>