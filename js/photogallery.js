(function($){
  $(function(){
    //トップページフォトギャラリー
    $('#photoGallery .gallery').slick({
      dots: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      lazyLoad: 'ondemand'
    });
  });
}).call(this, jQuery);