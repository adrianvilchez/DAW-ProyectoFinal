<?php

    $pActivo = false;
    $gActivo = false;
    $mActivo = true;

    if (isset($_SESSION['usuario']))
    echo  "    " . $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <?php
        $titulo = "Músicos";
        include 'componentes/Head.php';
    ?>

    <body>
        
        <div class="contenedor">

            <!-- Header (include Nav) -->
            <?php
                include 'componentes/Header.php';
            ?>

            <main>
                <div id="mainContainer">

                    <h1>Músicos en activo</h1>
                
                    <hr />

                    <!-- Muestro todos los músicos y sus instrumentos aquí -->
                    <?php

                        //
                        
                    ?>
                    

                    <input name="generar" type="button" value="Actualiza">

                    <div class="posts">
                    </div>
                </div>

                <!-- RinghtContainer -->
                <?php
                    include 'componentes/RinghtContainer.php';
                ?>
            </main>

            <!-- Footer -->
            <?php
                include 'componentes/Footer.php';
            ?>
        </div>
    </body>
</html>