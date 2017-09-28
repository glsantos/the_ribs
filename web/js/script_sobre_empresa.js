$(document).ready(function(){

$("a").click(function(event){
var link = $(this);

if(link.attr("class").match("esconder"))
 $(".conteudo").hide("slow");

else
 $(".conteudo").show("slow");
 $(".div_principal_titulo1").show("slow");



event.preventDefault();

});

})
