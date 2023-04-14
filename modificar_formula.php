<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Modificar Fórmula</title>
        <link rel="stylesheet" href="estilo_altas_formula.css" type="text/css">
        <link rel="icon" type="image/x-icon" href="images/icono.png">
    </head>

    <body>

        <?php
            $ingr_nom = $_GET["ingr_re"];
            $ingr_cant = $_GET["cant_re"];
            $formula_nom = $_GET["nom_re"];

            require("conectar.php");

            $connexion = mysqli_connect("localhost","root","");
                
            if( mysqli_connect_errno()){
                echo "Hubo un problema con la base de datos error al conectar";
                exit() ;
            }

            mysqli_select_db($connexion,"fabrica_galletas") or die ("No se encuentra la Base de datos");
            mysqli_set_charset($connexion,"utf8");

            $instruccion_SQL = "DELETE FROM formulas WHERE form_nom='$formula_nom'";
            $resultado = mysqli_query($connexion,$instruccion_SQL);
            mysqli_close($connexion);
            
            echo'
            <form name="f_formulas_mod" method="get" action="BD_formulas.php">
                <input name="nom_re" type="text" size="40" class="camp campPHP" value="'; echo $formula_nom.'">
                <input name="cant_re" type="number" size="10" class="campo camp2 ingrePHP"value="'; echo $ingr_cant.'">
                <input name="ingr_re" type="text" size="25" class="campo ingrePHP" value="'; echo $ingr_nom.'">
            </form>

            <script language="JavaScript">
            document.f_formulas_mod.submit()
            </script>';

            #header('Location: BD_formulas.php');

        ?>
    </body>
</html>