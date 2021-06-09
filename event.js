/*const btn1=document.getElementById('adio');
const btn2=document.getElementById('Hi');*/
let body=document.querySelector('body');
function saludar(){
    body.style.background='#151515';
}
function despedir(){
    body.style.background='#4E4E4E';
}
 
/*const magic = document.getElementById('colapsar').addEventListener('click', hide);
const boton = document.querySelectorAll('btn');
const bot1=document.getElementById('bot1');
const bot2=document.getElementById('bot2');*/
const magic = document.querySelector('.colpse');
magic.addEventListener('click', hide);
const bot1 = document.querySelector('.uno');
const bot2 = document.querySelector('.dos');
//magic.addEventListener('click', hide);

function hide(){
    if(bot1.style.display != 'none'){
        magic.textContent = 'Mostrar';
        bot1.style.display = 'none';
        bot2.style.display = 'none';         
    }
    else{
        magic.textContent = 'Ocultar';
        bot1.style.display = 'block';
        bot2.style.display = 'block';
    }
}
const input = document.getElementById('first_name');
input.addEventListener('keydown', function(e){
    if(e.key =='@'){
        alert('No se aceptan caracteres especicales');
    }
});

const casilla1 = document.getElementById('check');
const casilla2 = document.getElementById('check');
casilla1.addEventListener('change', function(e){
})
// querySelector es para clases, por eso usamos puntos
/*
const sect3=document.querySelector('.seccion3');//Guardamos el div con sección3
const forms=document.getElementById ('forms'); //Guardamos el formulario
forms.addEventListener('submit', function(e){
    e.preventDefault();
    let name = document.getElementById('first_name').value;
    let apellidos = document.getElementById('last_name').value;
    let correo = document.getElementById('email').value;
    let contra = document.getElementById('password').value;
    let checkbox1 = document.getElementById('check');
    let checkbox2 = document.getElementById('check2');
    const opc = document.querySelector('.nave');
    if(checkbox1.checked == true && checkbox2.checked == true && name !="" && correo !="" && apellidos !=""){
        agregarText(name, apellidos, correo);
        let html=`
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Calc/Calculadora.php">Calculadora</a></li>
        <li><a href="ppt/PAT.php">PAT</a></li>
        <li><a href="divisas/divisas.php">Divisas</a></li>
        </ul>`;
      opc.innerHTML = html;
    }
    else if(name == "" || apellidos=="" || correo==""){
      M.toast({html: 'Ingresa tus datos'});
    }
    else if(checkbox1.checked == false && checkbox2.checked == false){
        M.toast({html: 'Acepta los terminos y condiciones'});
    }

});
*/


function agregarText(name, apellidos,correo){
    let html =`<div class="card">
    <div class="card-image imsize">
      <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg">
        <span class="card-title">
        <div class="card-content">
        <p>Hola ${name} ${apellidos} <br> Ingresaste con el correo: ${correo}</p>
        </div>
      </span>
    </div>
  </div>`;
    sect3.innerHTML = html;
}