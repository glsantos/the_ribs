$(function(){
		
      $('.toggle-nav').click(function (e) {
		/*para propagação apos executar o clique*/
        e.stopPropagation();
		/*chamando função*/
        toggleNav();
      });

      $('#main').click(function (e){
        var target = $(e.target);
        if(!target.closest('#nav').length && $('#principal').hasClass('show-nav')) toggleNav();
      });

      function toggleNav(){

        if($('#principal').hasClass('show-nav')){
          $('#principal').removeClass('show-nav');   
        }
        else {
           $('#principal').addClass('show-nav');
        }
      }

});
