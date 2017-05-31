var colors = new Array(
  [255,247,230],
  [253,235,193],
  [255,228,174],
  [253,243,240],
  [250,223,207],
  [245,196,181]);

var step = 0;
//color table indices for:
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.005;

function updateGradient()
{

  if ( $===undefined ) return;

var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];

    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

  }
}

setInterval(updateGradient,10);


$(document).ready(function () {
  $("section.pre" ).fadeIn(2000);
  $("section.pre" ).delay(5000).fadeOut(1000);
  $(".maria img" ).delay(8200).fadeIn(1500);
  $("section.menu" ).delay(11000).fadeIn(1500);

  $("section.pree" ).fadeIn(1000);
  $("section.pree" ).delay(2000).fadeOut(1000);
  $("section.antiestres").delay(4200).fadeIn(1500);
  $("section.blog").delay(4200).fadeIn(1500);
  $("section.contacto").delay(4200).fadeIn(1500);
  $("section.perfil").delay(4200).fadeIn(1500);
  $("section.programas").delay(4200).fadeIn(1500);
  $("section.superballs").delay(4200).fadeIn(1500);
  $("section.talleres").delay(4200).fadeIn(1500);
  $("section.detox").delay(4200).fadeIn(1500);
  $("section.nutricion").delay(4200).fadeIn(1500);
  $("section.post").delay(4200).fadeIn(1500);



  $(".click").on("click",function(){
    $(".full").toggleClass( "none" );
    $("section.menu").toggleClass( "solid" );
  });
 //////////////////////////////////      1     /////////////////////////////////////
  //Blog leer mas
  $("article:nth-child(1) .leermas").on("click",function(){
    $("article:nth-child(1) .contentmas").slideDown(1000)
    $("article:nth-child(1) .leermas").css("display","none");
    $("article:nth-child(1) .leermenos").css("display","block");
  });
  //Blog leer menos
  $("article:nth-child(1) .leermenos").on("click",function(){
    $("article:nth-child(1) .contentmas").slideUp(1000)
    $("article:nth-child(1) .leermas").css("display","block");
    $("article:nth-child(1) .leermenos").css("display","none");
  });

   //////////////////////////////////      2     /////////////////////////////////////

  //Blog leer mas
  $("article:nth-child(2) .leermas").on("click",function(){
    $("article:nth-child(2) .contentmas").slideDown(1000)
    $("article:nth-child(2) .leermas").css("display","none");
    $("article:nth-child(2) .leermenos").css("display","block");
  });
  //Blog leer menos
  $("article:nth-child(2) .leermenos").on("click",function(){
    $("article:nth-child(2) .contentmas").slideUp(1000)
    $("article:nth-child(2) .leermas").css("display","block");
    $("article:nth-child(2) .leermenos").css("display","none");
  });

});
