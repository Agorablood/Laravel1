<div>
    <h1>Escenario 5</h1>
</div>
<div id="particles-js" class="particles"></div>

<div class="game-container">
    <h1>Cómo continuarás la historia...</h1>
    <div class="izq">
        <img class="movieImage" src="img/gato-tokyo2.jpg" alt="Ares" />
        <p>has llegado a la superficie y ahora estas en las calles de una bella ciudad, hay alguien que te habla...</p>
        <a href="{{ url('final') }}"><button id="btn-start" class="btn">Paseo por las calles</button></a>
    </div>
    <div class="der">
        <img class="movieImage" src="img/gato-alcantarilla.jpg" alt="Ares" />
        <p>Después de tanto avanzar y escapar acabas perdiendote pero no lo que nunca vas a perder es la esperanza de encontrar la salida.</p>
        <a href="{{ url('final') }}"><button id="btn-start" class="btn">Seguir explorando!</button></a>

    </div>

</div>

<div id="gameOverModal" class="modal">
    <div class="modal-content"></div>
</div>
