<?php
    $ruta = '../';
    require_once('../html/header.html');
    require_once('conexionDb.php');
?>

<form action="" method="post">
    <section>
        <label for="lbl-titulo">Servicio:</label>
        <input type="text" name="room-titulo" id="lbl-titulo">
    </section>
    <section>
        <label for="lbl-desc">Descripcion:</label>
        <textarea name="room-description" id="lbl-desc" cols="30" rows="10"></textarea>
    </section>
    <section>
        <label for="lbl-precio">Precio</label>
        <input type="number" step="0.01" name="room-precio" id="lbl-precio">
    </section>
    <input type="submit" value="Cargar">
</form>

<?php
    if(!empty($_POST['srv-titulo']) && !empty($_POST['srv-descripcion']) && !empty($_POST['srv-precio'])) {

        $titulo = $_POST['srv-titulo'];
        $descripcion = $_POST['srv-descripcion'];
        $precio = floatval($_POST['srv-precio']);
        $conexion = conectar();
        if($conexion){
            $consulta = 'INSERT INTO servicios(title_service,description_service,price_service) VALUES (\''. $titulo .'\',\''. $descripcion .'\',\''. $precio .'\')';
            $query = mysqli_query($conexion, $consulta);
            if($query){
                echo '<p> Cargado Exitoso</p>';
            } else {
                echo '<p> Error al cargar los datos</p>';
            }
            desconectar($conexion);
        }
    }
    require_once('../html/footer.html');
?>