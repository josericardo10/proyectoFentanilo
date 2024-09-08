/* function Perdedor(){
    var imagenes = document.getElementsByClassName('peque');
    document.write('perdiste');
    document.write('<img src="assets/img/perdedor.gif" class="per">');
}
function Ganador(){
    document.write('ganaste');
    document.write('<img src="assets/img/tenor.gif" class="gana">');
}
*/
/* mis funciones no son necesarias  */
function Ganador() {
    // Bloquear la interacción con el contenido de fondo
    var blockScreen = document.createElement('div');
    blockScreen.classList.add('block-screen');
    document.body.appendChild(blockScreen);

    // Crear un elemento de superposición
    var overlay = document.createElement('div');
    overlay.classList.add('overlay');
    overlay.innerHTML = 'Ganaste<br><img src="assets/img/tenor.gif" class="gana"> <br> <button onclick="location.reload();">Reintentar</button>';

    // Agregar la superposición al cuerpo del documento
    document.body.appendChild(overlay);

    // Deshabilitar el scroll
    document.body.classList.add('block-scroll');
}

function Perdedor() {
    // Bloquear la interacción con el contenido de fondo
    var blockScreen = document.createElement('div');
    blockScreen.classList.add('block-screen');
    document.body.appendChild(blockScreen);

    // Crear un elemento de superposición
    var overlay = document.createElement('div');
    overlay.classList.add('overlay');
    overlay.innerHTML = 'Perdiste<br><img src="assets/img/perdedor.gif" class="per"><br> <button onclick="location.reload();" class="btn">Reintentar</button>';

    // Agregar la superposición al cuerpo del documento
    document.body.appendChild(overlay);

    // Deshabilitar el scroll
    document.body.classList.add('block-scroll');
}