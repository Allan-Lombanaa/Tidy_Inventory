
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../resources/css/estilo.css">
    <script src="../resources/js/deslizar.js"></script>
    <script src="../resources/js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home</title>
</head>
<body>
    <header>
        <img src="../resources/img/logo.png" alt="logo" id="logo">
        <div class="dropdown" id="configDropdown">
            <div class="dropdown-content">
                <a href="#">Configuración</a>
                <a href="#">Tema</a>
                <a href="#">Contacto</a>
                <a href="TABLAS/cerrar_sesion.php">Cerrar sesión</a>
            </div>
        </div>
        <img src="../resources/img/config5.png" alt="menu_config" id="ajustes" onclick="toggleMenu()">
        <h1>Tidy Inventory</h1>
    </header>
    <nav class="OP">
        <div class="opciones1" id="escanear">
            <span class="opcion-texto">ESCANEAR</span>
            <div class="opcion-linea"></div>
        </div>
        <div class="opciones1" id="manual">
            <span class="opcion-texto">MANUAL</span>
            <div class="opcion-linea"></div>
        </div>
    </nav>

    <main id="main">
        <section id="contenidoEscanear">
            <br><br><br><br><br><br><br><br>
            <img src="../resources/img/barras.png" alt="provicional">
            <h1>NUEVA VENTA</h1>
        </section>
        <section id="contenidoManual">
        <h1>AGREGAR UNA NUEVA VENTA DE FORMA MANUAL</h1>
        </section>
    </main>
    <nav class="menu_principal">
    <div class="menu" id="inicio">
        <a href="http://localhost/Tidy_Inventory/public/home" class="fondo-azul">
            <img src="../resources/img/inicio.png" alt="inicio" class="menu-img">
            Principio
        </a>
    </div>
    <div class="menu" id="inventario">
        <a href="http://localhost/Tidy_Inventory/public/home/inventario" class="">
            <img src="../resources/img/inventario.png" alt="Inv" class="menu-img">
            Inventario
        </a>
    </div>
    <div class="menu" id="actualizaciones">
        <a href="http://localhost/Tidy_Inventory/public/home/actualizar" class="">
            <img src="../resources/img/actualizar2.png" alt="Act" class="menu-img">
            Actualizar
        </a>
    </div>
    <div class="menu" id="estadisticas">
        <a href="http://localhost/Tidy_Inventory/public/home/registros" class="">
            <img src="../resources/img/estadisticas.png" alt="Esta" class="menu-img">
            Registros
        </a>
    </div>
</nav>
</body>
</html>
