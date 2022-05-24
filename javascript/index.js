//BARS-MOBILE VIEW  
let bars = document.getElementById("bars").addEventListener("click", show);
function show(){
    document.getElementById('links').classList.toggle('show');
}
//DARKMODE
let imgTheme = document.getElementById("link-6").addEventListener("click", ()=>{
    let imgIcon = document.getElementById("mode");
    let theme = "light";
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        imgIcon.src="imagens/sun.webp";
        theme = "dark";
    }else{
        imgIcon.src="imagens/moon.webp";
    }
    document.cookie = "theme="+theme;
    
})
let imgTheme_1 = document.getElementsByClassName("mode1")[0].addEventListener("click", ()=>{
    let imgIcon_1 = document.getElementById("mode_1");
    let theme = "light";
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        imgIcon_1.src="imagens/sun.webp";
        theme = "dark";
    }else{
        imgIcon_1.src="imagens/moon.webp";
    }
    document.cookie = "theme="+theme;
    
})

//DATEPICKER-BLOQUEAR DATAS PASSADAS
var datepicker = document.getElementById("dia");
datepicker.min = new Date().toISOString().split("T")[0];

//BLOQUEAR DATAS FUTURAS
let dia = new Date();
// let dd = dia.getDate()+ 13;
// let mm = dia.getMonth() + 1;
let yyyy = dia.getFullYear();
// if(dd < 10){
//     dd = '0'+ dd;
// }
// if(mm < 10){
//     mm = '0'+ mm;
// }
data_futura = yyyy + '-' + 12 + '-' + 31;
datepicker.setAttribute("max", data_futura);

//MOFICAR DATA DINAMICAMENTE
datepicker.addEventListener("change", () =>{
    let dia = new Date(datepicker.value);
    let diaSemana = dia.getDay();
    let Hora = document.getElementById("hora");
    if(diaSemana >=1 && diaSemana <=5){
        var horaMin = 8;
        var horaMax = 22;
        removerHora();
        horaDinamica();       
    }else{
        var horaMin = 9;
        var horaMax = 19;
        removerHora();
        horaDinamica();  
    }

    function horaDinamica(){
        for(i = horaMin; i < horaMax; i++){
            let opt = document.createElement("option");
            let opt2 = document.createElement("option");
            opt.value = i+":00";
            opt2.value = i+":30";
            opt.innerHTML = (i+":00");
            opt2.innerHTML = (i+ ":30");
            Hora.appendChild(opt);
            Hora.appendChild(opt2);
        }
    }

    function removerHora(){
        let length = Hora.options.length;
        for (j = length-1; j >= 0; j--) {
          Hora.options[j] = null;
        }    
    } 
})
//PRECO
let preco = document.getElementById('valor');
let corte = document.getElementById('corte').onchange=mostrarPreco;

function mostrarPreco(){
  let valor = document.forms[0].corte.value;

    switch (valor) {
        case "":
            preco.innerText = "Sem preco";
            break;
        case "Juba":
            preco.innerText = "100 Meticais";
            break;
        case "Carreca":
            preco.innerText = "120 Meticais";
            break;
        case "Punk":
            preco.innerText = "170 Meticais";
            break; 
        case "Escovinha Grossa":
            preco.innerText = "150 Meticais";
            break; 
        case "Escovinha Fina":
            preco.innerText = "130 Meticais";
            break;
        case "Coloracao de Cabelo":
            preco.innerText = "200 Meticais";
            break;
        case "Barba c/ Navalha":
            preco.innerText = "150 Meticais";
            break;
        case "Barba c/ Maquina":
            preco.innerText = "100 Meticais";
            break;
        case "Cabelo e Barba c/ Maquina":
            preco.innerText = "250 Meticais";
            break;
        case "Cabelo e Barba c/ Navalha":
            preco.innerText = "300 Meticais";
            break;
        case "Mascara Facial":
            preco.innerText = "400 Meticais";
            break;
        default:
            break;
    }
}