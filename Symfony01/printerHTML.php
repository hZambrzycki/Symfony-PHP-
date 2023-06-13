<?php
include_once 'Controller.php';

$_SESSION['listaAlumnos'] = $listaAlumnos;
$_SESSION['listaFaltas'] = $listaFaltas;

$answerType = $_SESSION["value"];
echo $answerType;

if ($answerType == 1) {
    ?>
    <body>
        <div>
            <h1>Formulario creación de Amonestaciones</h1>

            <div>

                <form method="POST" action="Controller.php">    
                    <p>NOMBRE</p>
                    <br>
                    <select name="Alumno">

    <?php
    foreach ($listaAlumnos as $Alumno) {
        ?>
                            <option value="<?php echo $Alumno->getNombre_alumno() ?> "> <?php echo $Alumno->getNombre_alumno() ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <p> Gravedad </p>
                    <br>
                    <select name="gravedad"> 
    <?php
    foreach ($gravedad as $tipoGravedad) {
        ?>
                            <option value="<?php echo $tipoGravedad ?> "> <?php echo $tipoGravedad ?></option>

                        <?php } ?>
                    </select>

                    <br>
                    <p> Tipo de falta </p>
                    <br>

                    <select name="descrpcion_falta">

    <?php
    foreach ($listaFaltas as $Falta) {
        ?>
                            <option value="<?php echo $Falta->getId_falta() ?> "> <?php echo $Falta->getDescripcion() ?></option>

                        <?php } ?>

                    </select>  
                </form>

            </div>



        </div>    



    </body>
    <?php
}?>