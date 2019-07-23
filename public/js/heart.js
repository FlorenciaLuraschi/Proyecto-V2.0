window.onload = function(){
let heart = document.getElementById("myHeart");
heart.onclick = cuenta;
let count_heart= 0;
function cuenta(){
count_heart += 1;
}
$(heart).ready(function(){
  $(heart).click(function(){
  cuenta();
  alert(count_heart);
  });

});
}
//
// $("ul.hearts li a").click(function(e)
// {
//     e.preventDefault(); /* Evitamos el # en la barra de direcciones */
//     var voto=$(this).data("voto"); /* Obtenemos el resultado del voto: 1 */
//     var objeto=$(this).closest("li").find(".count"); /* Obtenemos el elemento para cambiar el valor una vez realizado el voto */
//     if (voto && objeto) votar(voto,1,objeto); /* Votamos: en este tipo, el valor siempre será +1 */
// });
