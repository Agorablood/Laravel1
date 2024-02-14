<div>
    <h1>Escenario 5</h1>
</div>
<div id="particles-js" class="particles"></div>

<div class="game-container">
    <h1>Una decisión inesperada</h1>
    <div class="izq">
        <img class="movieImage" src="img/gato-jaula.jpg" alt="Ares" />
        <p>Los demonios te han engañado y ahora estas preso en una jaula, pero decides escapar y buscar una nueva vida</p>
        <a href="{{ url('noveno-escenario') }}"><button id="btn-start" class="btn">Rompe la jaula!</button></a>
    </div>
    <div class="der">
        <img class="movieImage" src="img/gato-malos1.jpg" alt="Ares" />
        <p>has elegido el camino del mal y ahora eres el lider de los demonios, tu destino está escrito y ahora te dedicas a sembrar el terror</p>
        <a href="{{ url('inicio') }}"><button id="btn-start" class="btn">empezar otra vez?</button></a>

    </div>

</div>

<div id="gameOverModal" class="modal">
    <div class="modal-content"></div>
</div>
