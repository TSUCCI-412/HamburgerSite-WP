jQuery(function(){

  jQuery('.c-btn--sp').on('click',function(){
    //1024px以下なら
    if (window.matchMedia( "(max-width: 1024px)" ).matches) {
    
      jQuery(".is-open").addClass("active");  
      jQuery('.is-menu').addClass('on-menu');
      jQuery('.is-fade').addClass("cover");

    }
  })

  jQuery(".c-toggle--line").on("click",function() {
    if (window.matchMedia( "(max-width: 1024px)" ).matches) {
   
      jQuery(".is-open").toggleClass("active");  
      jQuery('.is-menu').toggleClass('on-menu');
      jQuery('.is-fade').toggleClass("cover");
    }
  })

  var timer = 0;
 
  window.onresize = function () {
    if (timer > 0) {
      clearTimeout(timer);
    }
 
    timer = setTimeout(function () {
      var w = jQuery(window).width();
            //ここにリサイズした後に実行したい処理を記述
            if( w > 1023 ) {

              jQuery('.is-open').hasClass('active');
              jQuery('.is-open').removeClass('active');
              jQuery('.c-toggle--btn').show;
      
              jQuery('.is-fade').hasClass('cover');
              jQuery('.is-fade').removeClass('cover');
      
              jQuery('.is-menu').hasClass('on-menu');
              jQuery('.is-menu').removeClass('on-menu');
            }
            else if( w < 1025) {

              jQuery('.is-open').hasClass('active');
              jQuery('.is-open').removeClass('active');
              jQuery('.c-btn--sp').show;

              jQuery('.is-fade').hasClass('cover');
              jQuery('.is-fade').removeClass('cover');

              jQuery('.is-menu').hasClass('on-menu');
              jQuery('.is-menu').removeClass('on-menu');
            }        
      
    }, 200);
  };
 
        
}); //最後のカッコ


