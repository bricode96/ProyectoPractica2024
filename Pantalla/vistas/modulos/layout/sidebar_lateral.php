<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sidebar con Dos Partes Dinámicas de Imágenes</title>
    <style>
        /* Estilos adicionales personalizables */
        .menu_lateral {
            width: 250px; /* Ancho del sidebar */
        }
        .brand-text {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .sidebar {
            padding-top: 20px;
        }
        .sidebar-section {
            margin-bottom: 20px;
        }
        .sidebar-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 menu_lateral">

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="vistas/assets/dist/img/cemesa.png" alt="CEMESA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CEMESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Primera sección de imágenes -->
        <div class="sidebar-section">
            <img id="sidebar-image1" class="sidebar-image" src="vistas/assets/dist/img/cemesa.png" alt="Imagen por defecto">
        </div>

        <!-- Segunda sección de imágenes -->
        <div class="sidebar-section">
            <img id="sidebar-image2" class="sidebar-image" src="vistas/assets/dist/img/GustavoHueso.png" alt="Imagen por defecto">
        </div>

    </div>
    <!-- /.sidebar -->
</aside>

<script>
    // Arrays con las rutas de las imágenes para cada sección
    var imagenes1 = [
        "vistas/assets/dist/img/cemesa.png",
        "vistas/assets/dist/img/DianaKury.png", //1
        "vistas/assets/dist/img/GlendaBanegas.png", //2
        "vistas/assets/dist/img/HectorArmijo.png", //3
        "vistas/assets/dist/img/FranciscoSomoza.png", //4
        "vistas/assets/dist/img/HectorFonseca.png", //5
        "vistas/assets/dist/img/OctavioFajardo.png", //6
        "vistas/assets/dist/img/GenovevaSalgado.png", //7
        "vistas/assets/dist/img/JoseInteriano.png", //8
        "vistas/assets/dist/img/FeizalSelman.png", //9
        "vistas/assets/dist/img/OmarSoler.png", //10
        "vistas/assets/dist/img/OvidioCerna.png", //11
        "vistas/assets/dist/img/CarolinaAraque.png", //12
        "vistas/assets/dist/img/WilliamCopeland.png", //13
        "vistas/assets/dist/img/MarcialZuniga.png", //14
        "vistas/assets/dist/img/RodrigoVaquero.png", //15
        "vistas/assets/dist/img/GaryCooper.png", //16
        "vistas/assets/dist/img/ManuelSalinas.png", //17
        "vistas/assets/dist/img/IsmaelSegura.png", //18
        "vistas/assets/dist/img/GheronimoHerrera.png", //19
        "vistas/assets/dist/img/EvensCarbajal.png", //20
        "vistas/assets/dist/img/PatrickVasquez.png", //21
        "vistas/assets/dist/img/GinaMatamoros.png", //22
        "vistas/assets/dist/img/JudithPineda.png", //23
        "vistas/assets/dist/img/KarinaAlvarenga.png", //24
        "vistas/assets/dist/img/ClaudiaGutierrez.png", //25
        "vistas/assets/dist/img/IleanaMayes.png", //26
        "vistas/assets/dist/img/JamesRueda.png", //27
        "vistas/assets/dist/img/JoseFaraj.png", //28
        "vistas/assets/dist/img/CesarSomoza.png", //29
        "vistas/assets/dist/img/MarthaJanser.png", //30
        "vistas/assets/dist/img/LuisFonseca.png", //31
        "vistas/assets/dist/img/MiguelCrespin.png", //32
        "vistas/assets/dist/img/JoseJaar.png", //33
        "vistas/assets/dist/img/FranciscoGomez.png", //34
        "vistas/assets/dist/img/MarioPinto.png", //35
        "vistas/assets/dist/img/JorgeFonseca.png", //36
        "vistas/assets/dist/img/AlexWolozny.png", //37
        "vistas/assets/dist/img/JoseAbastida.png", //38
        "vistas/assets/dist/img/LuciaCalidonio.png", //39
        "vistas/assets/dist/img/ArlinVarela.png", //40
        "vistas/assets/dist/img/GloriaRivas.png", //41
        "vistas/assets/dist/img/PedroGarcia.png", //42
        "vistas/assets/dist/img/OscarPerez.png", //43
        "vistas/assets/dist/img/AlexOrtiz.png", //44
        "vistas/assets/dist/img/KarenSanchez.png", //45
        "vistas/assets/dist/img/RamonMartinez.png", //46
        "vistas/assets/dist/img/CarlosRomero.png", //47
        "vistas/assets/dist/img/FernandoValerio.png", //48
        "vistas/assets/dist/img/LuisFerrera.png", //49
        "vistas/assets/dist/img/RossanyEscalante.png", //50
        "vistas/assets/dist/img/OscarDiaz.png", //51
        "vistas/assets/dist/img/DavidKury.png", //52
        "vistas/assets/dist/img/SuyapaMejia.png", //53
        "vistas/assets/dist/img/NiguelRodriguez.png", //54
        "vistas/assets/dist/img/GrevilMadrid.png", //55
        "vistas/assets/dist/img/JoseAgurcia.png", //56
        "vistas/assets/dist/img/ManuelOrdoñez.png", //57
        "vistas/assets/dist/img/OmarSauceda.png", //58
        "vistas/assets/dist/img/EmilioBarrueto.png", //59
        "vistas/assets/dist/img/WilliamLemus.png" //60
    ];

    var imagenes2 = [
        "vistas/assets/dist/img/GustavoHueso.png",
        "vistas/assets/dist/img/SomozaCesar.png", //1
        "vistas/assets/dist/img/OlgaBarrillas.png", //2
        "vistas/assets/dist/img/EnaMiller.png", //3
        "vistas/assets/dist/img/CarlaChong.png", //4
        "vistas/assets/dist/img/JoseValerio.png", //5
        "vistas/assets/dist/img/VictorBerrios.png", //6
        "vistas/assets/dist/img/EduardoNazar.png", //7
        "vistas/assets/dist/img/JuanCorea.png", //8
        "vistas/assets/dist/img/FannyHerrera.png", //9
        "vistas/assets/dist/img/JavierLagos.png", //10
        "vistas/assets/dist/img/EuniceRamirez.png", //11
        "vistas/assets/dist/img/HumbertoSu.png", //12
        "vistas/assets/dist/img/EuniceBenitez.png", //13 
        "vistas/assets/dist/img/AnaEspinoza.png", //14 
        "vistas/assets/dist/img/GloriaHam.png", //15
        "vistas/assets/dist/img/LeviveRomero.png", //16
        "vistas/assets/dist/img/AndreInteriano.png", //17
        "vistas/assets/dist/img/AndreaSierra.png", //18
        "vistas/assets/dist/img/VivianCastillo.png", //19
        "vistas/assets/dist/img/VanessaMiranda.png", //20
        "vistas/assets/dist/img/DaphneGalindo.png", //21
        "vistas/assets/dist/img/FrancoPacheco.png", //22
        "vistas/assets/dist/img/CinthiaAquino.png", //23
        "vistas/assets/dist/img/OscarBenitez.png", //24
        "vistas/assets/dist/img/DanielMoya.png", //25
        "vistas/assets/dist/img/GilbertoReyes.png", //26
        "vistas/assets/dist/img/JoseRodriguez.png", //27 
        "vistas/assets/dist/img/DavidHuezo.png", //28
        "vistas/assets/dist/img/JavierPastor.png", //29
        "vistas/assets/dist/img/AbimaelIzaguirre.png", //30
        "vistas/assets/dist/img/DollyAcosta.png", //31
        "vistas/assets/dist/img/ScarlethMedina.png", //32 
        "vistas/assets/dist/img/XiomaraHernandez.png", //33 
        "vistas/assets/dist/img/VictorKury.png", //34
        "vistas/assets/dist/img/MoisesMelgar.png", //35
        "vistas/assets/dist/img/JonathanQuiroz.png", //36
        "vistas/assets/dist/img/GerardoVillela.png", //37
        "vistas/assets/dist/img/GerardoPadilla.png", //38
        "vistas/assets/dist/img/ArlenCaballero.png", //39
        "vistas/assets/dist/img/LourdesAraujo.png", //40
        "vistas/assets/dist/img/MarlonFernandez.png", //41
        "vistas/assets/dist/img/NormaGonzales.png", //42
        "vistas/assets/dist/img/ErikaCole.png", //43
        "vistas/assets/dist/img/JoseValenzuela.png", //44
        "vistas/assets/dist/img/CarlosBonilla.png", //45
        "vistas/assets/dist/img/OscarBanegas.png", //46
        "vistas/assets/dist/img/SaulOrtiz.png", //47
        "vistas/assets/dist/img/ReinaPaz.png", //48
        "vistas/assets/dist/img/ManuelOrellana.png", //49
        "vistas/assets/dist/img/SamanthaSauceda.png", //50
        "vistas/assets/dist/img/ArletteAusturias.png", //51
        "vistas/assets/dist/img/GeremiasSerrano.png", //52
        "vistas/assets/dist/img/HectorValle.png", //53 
        "vistas/assets/dist/img/JessicaSalgado.png", //54
        "vistas/assets/dist/img/XeniaRegalado.png", //55
        "vistas/assets/dist/img/GustavoCastellanos.png",//56
        "vistas/assets/dist/img/EmyGutierrez.png", //57
        "vistas/assets/dist/img/JuanPablo.png", //58
        "vistas/assets/dist/img/JesusCanales.png", //59
        "vistas/assets/dist/img/DanielMolina.png", //60
    ];

    var index1 = 0;
    var index2 = 0;

    // Función para cambiar la imagen de la primera sección
    function cambiarImagen1() {
        document.getElementById('sidebar-image1').src = imagenes1[index1];
        index1 = (index1 + 1) % imagenes1.length;  // Avanzar a la siguiente imagen circularmente
    }

    // Función para cambiar la imagen de la segunda sección
    function cambiarImagen2() {
        document.getElementById('sidebar-image2').src = imagenes2[index2];
        index2 = (index2 + 1) % imagenes2.length;  // Avanzar a la siguiente imagen circularmente
    }

    // Iniciar el cambio de imágenes cada 8 segundos (8000 milisegundos) para cada sección
    setInterval(cambiarImagen1, 8000);
    setInterval(cambiarImagen2, 8000);  
</script>

</body>
</html>