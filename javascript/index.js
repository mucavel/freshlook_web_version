//BARS-MOBILE VIEW  
let bars = document.getElementById("bars").addEventListener("click", show);
function show(){
    document.getElementById('links').classList.toggle('show');
}

//DATEPICKER-BLOQUEAR DATAS PASSADAS
var datepicker = document.getElementById("dia");
datepicker.min = new Date().toISOString().split("T")[0];
//MOFICAR DATA DINAMICAMENTE
datepicker.addEventListener("change", () =>{
    let dia = new Date(datepicker.value);
    let diaSemana = dia.getDay();
    let selectHora = document.getElementById("hora");
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

    function horaDinamica(diaSemana){
        for(i = horaMin; i < horaMax; i++){
            let opt = document.createElement("option");
            let opt2 = document.createElement("option");
            opt.value = i+":00";
            opt2.value = i+":30";
            opt.innerHTML = (i+":00");
            opt2.innerHTML = (i+ ":30");
            selectHora.appendChild(opt);
            selectHora.appendChild(opt2);
            console.log(opt.value + " "+opt2.value)
        }
    }

    function removerHora(){
        let length = selectHora.options.length;
        for (j = length-1; j >= 0; j--) {
          selectHora.options[j] = null;
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
            preco.innerText = "0";
            break;
        case "Juba":
            preco.innerText = "50";
            break;
        case "Carreca":
            preco.innerText = "80";
            break;
        case "Punk":
            preco.innerText = "150";
            break; 
        case "Escovinha Grossa":
            preco.innerText = "120";
            break; 
        case "Escovinha Fina":
            preco.innerText = "100";
            break;
        case "Barba":
            preco.innerText = "130";
            break;
        case "Cabelo e Barba":
            preco.innerText = "200";
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