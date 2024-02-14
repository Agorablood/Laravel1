<div>
    <h1>Escenario 3</h1>
</div>
<div id="particles-js" class="particles"></div>

<div class="game-container">
    <h1>El rio Eterno</h1>
    <div class="izq">
        <img class="movieImage" src="img/gato-rio.jpg" alt="Ares" />
        <p>Llegas a un rio muy grande y tu instinto te dice que saltes pero no estas seguro de hacerlo...</p>
        <a href="{{ url('cuarto-escenario') }}"><button id="btn-start" class="btn">Salta al rio</button></a>
    </div>
    <div class="der">
        <img class="movieImage" src="img/gato-rio1.jpg" alt="Ares" />
        <p>Te encuentras con un rio inmenso y como te da miedo el agua decides andar por el rio y seguir el camino</p>
        <a href="{{ url('noveno-escenario') }}"><button id="btn-start" class="btn">Caminar por el rio</button></a>
    </div>
</div>

<div id="gameOverModal" class="modal">
    <div class="modal-content"></div>
</div>
