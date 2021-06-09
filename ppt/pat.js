const p = document.getElementById('piedra');
const a = document.getElementById('papel');
const t = document.getElementById('tijera');

var ganaM = 0;
var ganaU = 0;

let mark = document.querySelector('.marcador');
let resultado = document.querySelector('.res');

function piedra(){
  var random = Math.round(Math.random() * 2);
  switch(true){
    case (random == 0):
    let m = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m;
    let p = `La Máquina eligió piedra, Empate`;
    resultado.innerHTML = p;
    break;
    case (random == 2):
    ganaU++;
    let m1 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m1;
    let p1 = `La Máquina eligió tijera, Ganas`;
    resultado.innerHTML = p1;
    break;
    case (random == 1):
    ganaM++;
    let m2 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m2;
    let p2 = `La Máquina eligió papel, Pierdes`;
    resultado.innerHTML = p2;
    break;
  }
}

function papel(){
  var random = Math.round(Math.random() * 2);
  switch(true){
    case (random == 1):
    let m = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m;
    let html = `La Máquina eligió papel, Empate`;
    resultado.innerHTML = html;
    break;
    case (random == 0):
    ganaU++;
    let m1 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m1;
    let html1 = `La Máquina eligió piedra, Ganas`;
    resultado.innerHTML = html1;
    break;
    case (random == 2):
    ganaM++;
    let m2 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m2;
    let htm2 = `La Máquina eligió tijera, pierdes`;
    resultado.innerHTML = htm2;
    break;
  }
}

function tijera(){
  var random = Math.round(Math.random() * 2);
  switch(true){
    case (random == 2):
    let m = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m;
    let html = `La Máquina eligió tijeras, Empate`;
    resultado.innerHTML = html;
    break;
    case (random == 1):
    ganaU++;
    let m1 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m1;
    let html1 = `La Máquina eligió papel, Ganas`;
    resultado.innerHTML = html1;
    break;
    case (random == 0):
    ganaM++;
    let m2 = `Máquina: ${ganaM} Usuario: ${ganaU}`;
    mark.innerHTML = m2;
    let htm2 = `La Máquina eligió piedra, pierdes`;
    resultado.innerHTML = htm2;
    break;
  }
}