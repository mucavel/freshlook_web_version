//BARS-MOBILE VIEW  
let bars = document.getElementById("bars").addEventListener("click", show);
function show(){
    document.getElementById('links').classList.toggle('show');
}

//DATEPICKER-BLOQUEAR DATAS PASSADAS
let datepicker = document.getElementById("dia");
datepicker.min = new Date().toISOString().split("T")[0];
//BLOQUEAR DATAS FUTURAS
let dia = new Date();
let dd = dia.getDate()+ 13;
let mm = dia.getMonth() + 1;
let yyyy = dia.getFullYear();

if(dd < 10){
    dd = '0'+ dd;
}
if(mm < 10){
    mm = '0'+ mm;
}
data_futura = yyyy + '-' + mm + '-' + dd;
datepicker.setAttribute("max", data_futura);
console.log(data_futura)
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