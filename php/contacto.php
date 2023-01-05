<?php
    $ruta = '../';
    require_once('../html/header.html');
?>
<link rel="stylesheet" href="<?php echo $ruta;?>css/contactoDora.css">

<section class="contacto__contenedor">
    <section>
        <section>
            <i></i>
            <h3>Check In - Check Out</h3>
            <p>11:00 AM  - 12:00 AM</p>
        </section>
        <section>
            <i></i>
            <h3>Numero de contacto</h3>
            <p>+54 3858 440-556</p>
        </section>
        <section>
            <i></i>
            <h3>Ubicación</h3>
            <p>Maipú 264, Termas de Río Hondo, Santiago del Estero</p>
        </section>
    </section>
    <section class="contacto__form">
        <form action="">
            <section>
                <label for=""></label>
                <input type="text" name="" id="" placeholder="Nombre">
            </section>
            <section>
                <label for=""></label>
                <input type="email" name="" id="" placeholder="Ingrese direccion de email">
            </section>
            <section>
                <label for=""></label>
                <textarea name="" id="" placeholder="Ingrese Mensaje"></textarea>
            </section>
            <input type="submit" value="Enviar">
        </form>
    </section>
</section>
<section class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7078.3945347767185!2d-64.86804982489951!3d-27.494239837805875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94236e632729b943%3A0x200ed4e199ac9ca!2sDORA%20SPA%20TERMAL!5e0!3m2!1ses!2sar!4v1665195327856!5m2!1ses!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php
    require_once('../html/footer.html');
?>