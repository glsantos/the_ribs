$(document).ready(function(){

     $("a").click(function(event){
     var link = $(this);

     if(link.attr("class").match("esconder"))
       $(".resposta").hide("slow");

     else
       $(".resposta").show("slow");
       $(".fechar_resposta").show("slow");

     event.preventDefault();
     });

     })
