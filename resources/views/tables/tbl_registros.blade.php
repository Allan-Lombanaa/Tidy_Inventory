<div class="datos-container">
    <h2 class="text-datos">Total recaudado</h2>
    <table class="datos">
        <tr>
            <th>Hoy <br> <img src="../../resources/img/hoy.png" class="img-datos"></th>
            <th>Ayer <br> <img src="../../resources/img/ayer.png" class="img-datos"></th>
            <th>Semana <br> <img src="../../resources/img/semana.png" class="img-datos"></th>
        </tr>
        <tr>
            <th>{{ $totalHoy }} COP</th>
            <th>{{ $totalAyer }} COP</th>
            <th>{{ $totalSemana }} COP</th>
        </tr>
    </table>
</div>

<h2 class="text-datos">Ganancias</h2>
<div class="datos-container">
    <table class="datos">
        <tr>
            <th>Hoy <br> <img src="../../resources/img/hoy.png" class="img-datos"></th>
            <th>Ayer <br> <img src="../../resources/img/ayer.png" class="img-datos"></th>
            <th>Semana <br> <img src="../../resources/img/semana.png" class="img-datos"></th>
        </tr>
        <tr>
            <th>{{ $diferenciaHoy }} COP</th>
            <th>{{ $diferenciaAyer }} COP</th>
            <th>{{ $diferenciaSemana }} COP</th>
        </tr>
    </table>
</div>

<h2 class="text-datos">Total vendido</h2>
<div class="datos-container">
    <table class="datos">
        <tr>
            <th>Hoy <br> <img src="../../resources/img/cantidad.png" class="img-datos"></th>
            <th>Ayer <br> <img src="../../resources/img/cantidad.png" class="img-datos"></th>
            <th>Semana <br> <img src="../../resources/img/cantidad.png" class="img-datos"></th>
        </tr>
        <tr>
            <th>{{ $cantidadHoy }} C/U</th>
            <th>{{ $cantidadAyer }} C/U</th>
            <th>{{ $cantidadSemana }} C/U</th>
        </tr>
    </table>
</div>