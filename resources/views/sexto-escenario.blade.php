<div>
    <h1>Escenario 5</h1>
</div>
<div id="particles-js" class="particles"></div>

<div class="game-container">
    <h1>Oscuridad absoluta</h1>
    <div class="izq">
        <img class="movieImage" src="img/gato-malos.jpg" alt="Ares" />
        <p>Acabas encontrandote con los demonios de las alcantarillas, huye lo mas rapido que puedas de ahi!</p>
        <a href="{{ url('duodecimo-escenario') }}"><button id="btn-start" class="btn">Escapar!</button></a>
    </div>
    <div class="der">
        <img class="movieImage" src="img/gato-raton.jpg" alt="Ares" />
        <p>Decides esconderte para siempre en la fria y oscura alcantarilla para siempre, alimentandote de ratones y todo lo que encuentres a tu paso.</p>
        <a href="{{ url('inicio') }}"><button id="btn-start" class="btn">Empezar otra vez?</button></a>

    </div>

</div>

<div id="gameOverModal" class="modal">
    <div class="modal-content"></div>
</div>
