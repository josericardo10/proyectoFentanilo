function Perdedor(){
    document.write("perdiste ff yiyi papa");
}
function Ganador(){
    document.write("<h1 style='color: rgb(45, 184, 10)'>");
    document.body.style.backgroundColor = "black";
    var imagen =document.createElement("img");
    imagen.src="img/void.gif";
    imagen.width="500";
    imagen.height="300";
    imagen.style.display="block";
    imagen.style.margin ="auto";
    document.body.appendChild(imagen);
    document.write("<center>👀👀👀GG....<center>");
}