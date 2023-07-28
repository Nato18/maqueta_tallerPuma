let pasoAnteriorID = "";
let pasoActualID = "paso-1";
let pasoAnterior = document.getElementById(pasoAnteriorID);
let pasoActual = document.getElementById(pasoActualID);

let pasoCounter = 1;
let seccion = "";

const btnEnmarcaciones = document.getElementById("btnEnmarcaciones");
const paso1 = document.getElementById("paso-1");
const paso2 = document.getElementById("paso-2");
const volver = document.getElementById("volver");

// $("#Enmarcaciones").click(function() {
//     $("#paso-1").fadeOut();
//     $("#paso-2").fadeIn();
//     $("#div2").fadeIn("slow");
//     $("#div3").fadeIn(3000);
// });

btnEnmarcaciones.addEventListener("click", function() {
    paso1.style.display = 'none';
    seccion = "enmarcaciones";
    $("#"+seccion+pasoCounter).show();
    pasoCounter++;
    $(`li:contains("${pasoCounter}")`).removeClass("step-prox");
    $(`li:contains("${pasoCounter}")`).addClass("step-actual");
    
});

$(".volver").click( () =>{
  console.log(seccion+pasoCounter);
  if(pasoCounter == 2){
    $(`li:contains("${pasoCounter}")`).removeClass("step-actual");
    $(`li:contains("${pasoCounter}")`).addClass("step-prox");
    pasoCounter--;
    $("#"+seccion+pasoCounter).hide();
    paso1.style.display = 'block';
  }else{
    $(`li:contains("${pasoCounter}")`).removeClass("step-actual");
    $(`li:contains("${pasoCounter}")`).addClass("step-prox");
    $("#"+seccion+pasoCounter).hide();
    pasoCounter--;
    $("#"+seccion+pasoCounter).show();

  }
});
$(".siguiente").click( () =>{
  console.log(seccion+pasoCounter);
  $("#"+seccion+pasoCounter).hide();
  pasoCounter++;
  $("#"+seccion+pasoCounter).show();
  $(`li:contains("${pasoCounter}")`).removeClass("step-prox");
  $(`li:contains("${pasoCounter}")`).addClass("step-actual");
});

$("#largo").on('blur', () => {
    $(".valorLargo").html($("#largo").val() + " cm");
});
$("#ancho").on('blur', () => {
    $(".valorAncho").html($("#ancho").val() + " cm");
});

let colorEnmarcacion = "";
let botonPrevio = null;

$(".btnColor").click(function() {
  let textoBoton = $(this).text().trim();
  if (colorEnmarcacion !== "") {
    // Buscamos y quitamos la clase al botón previo
    if (botonPrevio !== null) {
      botonPrevio.removeClass("btnColorBorder");
    }
    // Asignamos el botón actual como el botón previo
    botonPrevio = $(".btnColor").filter(function() {
      return $(this).text().trim() === colorEnmarcacion;
    });
    botonPrevio.removeClass("btnColorBorder");
  }
  // Asignamos el botón actual como el nuevo botón previo
  botonPrevio = $(this);
  $(this).addClass("btnColorBorder");
  colorEnmarcacion = textoBoton;
});

