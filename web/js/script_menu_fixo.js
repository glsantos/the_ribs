$(function(){
	
	var nav = $('#cabecalho');
	
	$(window).scroll(function(){
		
		if($(this).scrollTop() > 150){
			/*se o scroll for maior que 150 adicionamos a classe menu fixo*/
			nav.addClass("cabecalho-fixo");
			
		}else{
			nav.removeClass("cabecalho-fixo");
		}
	}); 
});