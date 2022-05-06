//BARS-MOBILE VIEW  
let bars = document.getElementById("bars").addEventListener("click", show);
function show(){
    document.getElementById('links').classList.toggle('show');
}
//DARKMODE
let theme = document.getElementById("theme").addEventListener("click", ()=>{
    let fadeHeader = document.getElementById("header-container").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    let body = document.getElementsByTagName("body")[0].classList.add("bodyDark");
    let aboutContainer = document.getElementById("about-us-container");
    let aboutTxt = document.getElementById("about-text").classList.add("about-text");
    let paragraph = document.querySelector("body").classList.add("bodyP");
    let servicesSect = document.getElementById("services").style.backgroundColor = "rgb(0, 0, 0)";
    for(let i = 0; i<=5; i++){
        let servicesCont = document.getElementsByClassName("services")[i].style.backgroundColor = "rgb(19, 19, 19)";
    }
    let comentsClient = document.getElementById("coments-clients").style.backgroundColor = "rgb(7, 7, 8)";
    let contactH2 = document.getElementsByClassName("contact-h2")[0].style.backgroundColor= "rgb(0, 0, 0)";
    let formH2 = document.getElementsByClassName("formulario-h2")[0].style.backgroundColor= "rgb(0, 0, 0)";

})
//DATEPICKER-BLOQUEAR DATAS PASSADAS
var datepicker = document.getElementById("dia");
datepicker.min = new Date().toISOString().split("T")[0];
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

//CARROSSEL
//PRECO
let preco = document.getElementById('valor');
let corte = document.getElementById('corte');

function mostrarPreco(){
  let valor = document.forms[0].corte.value;

    switch (valor) {
        case "":
            preco.innerText = "";
            break;
        case "Juba":
            preco.innerText = "50 Meticais";
            break;
        case "Carreca":
            preco.innerText = "80 Meticais";
            break;
        case "Punk":
            preco.innerText = "150 Meticais";
            break; 
        case "Escovinha Grossa":
            preco.innerText = "120 Meticais";
            break; 
        case "Escovinha Fina":
            preco.innerText = "100 Meticais";
            break;
        case "Barba":
            preco.innerText = "130 Meticais";
            break;
        case "Cabelo e Barba":
            preco.innerText = "200 Meticais";
            break;
        default:
            break;
    }
}
corte.onchange=mostrarPreco;
mostrarPreco();

//------------------------------------------------//
//BLOQUEAR DATAS FUTURAS
// let dia = new Date();
// let dd = dia.getDate()+ 13;
// let mm = dia.getMonth() + 1;
// let yyyy = dia.getFullYear();

// if(dd < 10){
//     dd = '0'+ dd;
// }
// if(mm < 10){
//     mm = '0'+ mm;
// }
// data_futura = yyyy + '-' + mm + '-' + dd;
// datepicker.setAttribute("max", data_futura);