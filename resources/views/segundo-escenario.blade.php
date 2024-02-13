<div>
    <h1>Escenario 2</h1>
</div>
<div id="particles-js" class="particles"></div>

<div class="game-container">
    <h1>Elige la opción deseada</h1>
    <div class="izq">
        <img class="movieImage" src="img/gato-bosque.jpg" alt="Ares" />
        <p>Decides avanzar por el bosque porque eres un explorador y quieres conocer el bosque con profundidad</p>
        <a href="{{ url('tercer-escenario') }}"><button id="btn-start" class="btn">Avanzar por el bosque</button></a>
    </div>
    <div class="der">
        <img class="movieImage" src="img/gato-salvaje.jpg" alt="Ares" />
        <p>Conoces una manada de gatos salvajes, gruñones y con pinta de tener mucha hambre, paracen ser malos!</p>
        <a href="{{ url('tercer-escenario') }}"><button id="btn-start" class="btn">Quedarte con los alvajes</button></a>
    </div>

</div>

<div id="gameOverModal" class="modal">
    <div class="modal-content"></div>
</div>
