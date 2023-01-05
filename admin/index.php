<?php
    require_once('html/header.html');
?>
    <section>
        <article>
            <form action="" method="POST">
                <section>
                    <label for="lbl-user">Usuario</label>
                    <input type="text" name="adminUser" id="lbl-user">
                </section>
                <section>
                    <label for="lbl-pass">Contraseña</label>
                    <input type="password" name="adminPass" id="lbl-pass">
                </section>
                <input type="submit" value="Iniciar Sesion">
            </form>
            <?php
                if(!empty($_POST['adminUser']) && $_POST['adminPass']){
                    $user = $_POST['adminUser'];
                    $pass = $_POST['adminPass'];

                    $server = 'localhost';
                    $userDb = 'root';
                    $passDb = '';
                    $dataBase = 'usuarios';
                    $conexion = mysqli_connect($server, $userDb, $passDb, $dataBase);
                    if ($conexion) {
                        $consulta = 'SELECT * FROM usuarios WHERE user = \'' . $user. '\' AND pass = \'' . $pass. '\'';
                        $query = mysqli_query($conexion, $consulta);
                        $resultado = mysqli_num_rows($query);
                        if ($resultado > 0) {
                            header('refresh: 3;url=php/admin.php');
                        }
                    }
                }  else {
                    echo '<p class"red"> Usuario o contraseña incorrecta</p>';
                }
            ?>
        </article>
    </section>
<?php
    require_once('html/footer.html');
?>