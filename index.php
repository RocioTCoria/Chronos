<?php
include("E:/Proyectos GitHub/Timexus/Base/conexion.php");

$sql = "SELECT * FROM EventosdelTiempo ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TIMEXUS. Relatará eventos pasados, tanto historicos como eventos especiales."/>
    <meta name="keywords" content="TIMEXUS, tiempo, eventos, años, meses, historia, paises"/>
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="royalty.dm@gmail.com"/>
    <meta name="publisher" content=""/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    
    <link rel="icon" href="Imgs/Logos/Timexus.svg" type="image/png">
    
    <title>TIMEXUS</title>

    <link rel="stylesheet" href="CSS/EstiloTimexus.css">
    <link rel="stylesheet" href="CSS/Q.Mobile.css">
    <link rel="stylesheet" href="CSS/Q.Tablet.css">
    <link rel="stylesheet" href="CSS/Q.Escritorio.css">

    <script src="JS/Timexus.js"></script>
</head>
<body>

    <nav>
        
        <img id="LogoTimexus" src="Imgs/Logos/Timexus.svg" alt="LogoTimexus" title="Timexus">

        <ul class="links" id="nav-links">
            <li><a href="#Eventos">Eventos</a></li>
            <li><a href="/HTML/QSoy.html">Quien soy</a></li>
            <li><a href="/HTML/AgregarEvento.html">Contáme</a></li>
        </ul>
    </nav>

    <header id="SoloInicio"> 

        <h1>TIMEXUS</h1>

    </header>

    <article id="Recuerdo">

        <p>¿Recuerdas algo de esto?</p>

    </article>

    <section id="Eventos">

    <?php
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<div class='TodoslosEventos'>";

            echo "<h2>" . htmlspecialchars($fila["titulo"]) . "</h2>";

            echo "<h3><strong>Fecha:</strong> " . $fila["fecha"] . "</h3>";

            echo "<p>" . nl2br(htmlspecialchars($fila["descripcion"])) . "</p>";
            echo "<img src='" . htmlspecialchars($fila["foto"]) . "' alt='Imagen del evento' 'title='Evento pasado'>";
            
            echo "</div>";
        }
    } else {
        echo "<p>No hay eventos registrados.</p>";
    }
    ?>

    </section>

    <footer>

        <div id="ColumnaIzquierda">

            <a href="#index.html"><img id="LogoCHRONOS" src="" alt="CHRONOS Imagotipo" title="CHRONOS"></a>

            <ul class="links" id="footer-links">
                <li><a href="Codigo/Eventos.html">Eventos</a></li>
                <li><a href="Codigo/QSoy.html">Quien soy</a></li>
                <li><a href="Codigo/AgregarEvento.html">Contáme</a></li>
            </ul>

        </div>

        <div id="ColumnaDerecha">
            <a href="https://royalty-gamma.vercel.app/" target="_blank"><img id="LogoPrincipal" src="Imgs/Logos/IMAGOTIPO AZUL P - copia.png" alt="Royalty Imagotipo" title="ROYALTY"></a>

            <p>Buenos Aires - Argentina</p>
            <p id="ultimo"> <strong>&#169; 2025 Rocio Tiziana Coria </strong> </p>
        </div>
    </footer>

</body>
</html>