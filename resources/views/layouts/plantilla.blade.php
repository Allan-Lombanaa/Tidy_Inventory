<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../../resources/css/estilo.css">
    <script src="../../resources/js/deslizar.js"></script>
    <script src="../../resources/js/menu.js"></script>
    @yield('other_resources')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img src="../../resources/img/logo.png" id="logo">
        <div class="dropdown" id="configDropdown">
            <div class="dropdown-content">
                <a href="#">Configuración</a>
                <a href="#">Tema</a>
                <a href="#">Contacto</a>
                <a href="TABLAS/cerrar_sesion.php">Cerrar sesión</a>
            </div>
        </div>
        <img src="../../resources/img/config5.png" alt="menu_config" id="ajustes" onclick="toggleMenu()">
        <h1>Tidy Inventory</h1>
    </header>
    <nav class="OP">
        <div class="opciones1" id="escanear">
            <span class="opcion-texto">@yield('first_section')</span>
            <div class="opcion-linea"></div>
        </div>
        <div class="opciones1" id="manual">
            <span class="opcion-texto">@yield('second_section')</span>
            <div class="opcion-linea"></div>
        </div>
    </nav>
    @yield('modal_producto')
    <main id="main">
        <section id="contenidoEscanear">
            @yield('first_section_content')
        </section>
        <section id="contenidoManual">
            @yield('second_section_content')
        </section>
    </main>
  <nav class="menu_principal">
    <div class="menu" id="inicio">
        <a href="http://localhost/Tidy_Inventory/public/home" class="">
            <img src="../../resources/img/inicio.png" class="menu-img">
            Principio
        </a>
    </div>
    <div class="menu" id="inventario">
        <a href="http://localhost/Tidy_Inventory/public/home/inventario" class="@yield('inventario_azul')">
            <img src="../../resources/img/inventario.png" class="menu-img">
            Inventario
        </a>
    </div>
    <div class="menu" id="actualizaciones">
        <a href="http://localhost/Tidy_Inventory/public/home/actualizar" class="@yield('actualizar_azul')">
            <img src="../../resources/img/actualizar2.png" class="menu-img">
            Actualizar
        </a>
    </div>
    <div class="menu" id="estadisticas">
        <a href="http://localhost/Tidy_Inventory/public/home/registros" class="@yield('estadisticas_azul')">
            <img src="../../resources/img/estadisticas.png" class="menu-img">
            Registros
        </a>
    </div>
</nav>
</body>
</html>