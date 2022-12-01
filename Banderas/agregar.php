<html>
    <form action="./backend/agregar.php" method="post">
        <label for="nombre">pais</label>
        <input type="text" name="nombre" id="continente">
        <select class="form-select" aria-label="Default select example">
        <option selected>continentes</option>
        <option value="1">America</option>
        <option value="2">Asia</option>
        <option value="3">Europa</option>
        <option value="3">Africa</option>
        </select>
        <div class="mb-3">
        <label for="bandera" class="form-label">bandera</label>
        <input class="form-control" type="file" id="bandera">
        </div>
        <br>
        <button>Agregar</button>
    </form>
</html>