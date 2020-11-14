/* TEST FIREBASE REALTIME
Author: Goon Nguyen
================================================== */
var path_resource = "assets/js/";
$(function(){
  if(typeof path_resource == "undefined" || !path_resource) path_resource = "";
  GScript.loadList([

    // external libraries
    path_resource + "plugin.js",
    path_resource + "datepicker.min.js",
    path_resource + "TweenMax.min.js",
    path_resource + "ScrollToPlugin.min.js",
    path_resource + "ScrollMagic.min.js", 
    path_resource + "animation.gsap.min.js", 
    path_resource + "debug.addIndicators.min.js"

  ], function(result){
    YMH.init();
  })

})



var YMH = {

  init: function() {

    $('.js-close').on('click', hideAlert);
    
    YMH.menu();
    YMH.menuMobile();
    YMH.disable();
    
    TweenMax.set('.main_copy .text', { visibility: 'visible',  skewX: 100, x: -200 , autoAlpha: 0  });
    TweenMax.set('.main_copy .btn', { y: 50  })
    $('#main').imagesLoaded()
    .always( function( instance ) {
      TweenMax.to('#main', .4,{ autoAlpha: 1 , onComplete: function(){
          TweenMax.to('.main_copy .text', .4,{ autoAlpha: 1, skewX: 0, x: 0 , ease: Back.easeOut.config(1) });
          TweenMax.to('.main_copy .btn', .4,{ autoAlpha: 1, y: 0 })
        } 
      })

    });


    if($('#pHome').length> 0) {

      YMH.term();
      YMH.home();
      YMH.scroll();
      YMH.deeplink();
      YMH.cldPopup();
      YMH.news();
      YMH.photo();
      YMH.gallery();
      YMH.contestantPopup();

      YMH.about();
      YMH.plan();
      YMH.chaneTab();
      YMH.countDown();
      // YMH.galleryDetail();
      // YMH.newsDetail();
    }

    if($('#pRegister').length> 0) {

      YMH.datepicker();
      YMH.register();
      YMH.checkInput();

    }

  },


  checkInput : function() {

    if( getDocumentSize(0) > 567) {
      $('.form-register .mb').remove();
    } else {
      $('.form-register .pc').remove();
    }

  },

  menuMobile: function() {
    
    $('.btn-menu').on('click', function(event) {
      event.preventDefault();
      if ($(this).hasClass('menu-open')) {
        $(this).removeClass('menu-open').addClass('menu-closed');
        $('nav').hide();
      } else {
        $(this).removeClass('menu-closed').addClass('menu-open');
        $('nav').show();
      };
    });

  }, 

  menu: function() {

    //TweenMax.set('li .nav-left', { x: 200 });
    //TweenMax.set('li .nav-right', { x: -200 }); 

    var menu = new TimelineLite();
        main = $('#nav');

        TweenMax.to(main, .5, { autoAlpha: 1 }); 

    menu.set('.logo', { visibility: 'visible' }, 's')
        .from('.logo', .5, { scale: 1.5 , ease:Power2.easeOut }, 's')
        //.set(main.find('li'), { visibility: 'visible' })
        //.staggerTo(main.find('li .nav-left'), .1, { x: 0 , ease:Expo.easeOut } , 0.02 )
        //.staggerTo(main.find('li .nav-right'), .1, { x: 0 , ease:Expo.easeOut } , 0.02 )
    ;

  },

  home: function() {

    var home = new TimelineLite(),
        main = $('#main');

    home.to(main.find('.copy > *'), .5 , { autoAlpha: 1}, 's')
        .staggerFrom('.bikers img', .5, { autoAlpha: 0, x: 400, y: -20 } , 0.1, 's')  
        .staggerFrom(".bikers img", 2, { z:-700 , scale: .7, ease:Expo.easeInOut }, 0.1,'s')
    ;    

  },

  term: function() {

    

    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({ triggerElement: "#term", triggerHook: 0.5 })
        .setClassToggle('#term', 'display') 
        .setTween(animate)
        .addTo(controller)
    var reverse = scene.reverse();    
      scene.reverse(false);    
        
    function animate() {

      var about = new TimelineLite()
           main = $('#term');

      about
        .from(main.find('h2'), 1, { y: -20 } ,'s')
        .from(main.find('.copy'), 1, { y: 100 ,ease:Expo.easeOut } ,'s' )
        
      ;   

    }

  },

  register: function() {

    var reg = new TimelineLite(),
        main = $('.form-register');

    reg.set(main, { visibility: 'visible' })
       .set(main.find('h2'), { visibility: 'visible' })
       .from(main, 0.3, { skewX: 100, x: -2000 , ease:Power2.easeOut } ,'s')
       .from(main.find('h2'), 1, { skewX: 100, x: -200 , ease: Back.easeOut.config(1)},'s+=0.1')  
       .set('.js-register , .form-register .buttons', { visibility: 'visible' },'s+=1')  
       .from('.js-register', 1, { y: 40 , autoAlpha: 0 , ease:Power2.easeOut },'s+=1')
       .from('.js-register .form', 1, { y: -60 , autoAlpha: 0 , ease:Power2.easeOut },'s+=1')
       .from('.buttons', 1, { y: -40 , autoAlpha: 0 , ease:Power2.easeOut },'s+=1')
       .to('.tooltip',1, { autoAlpha: 1, ease:Power2.easeOut })
       .set('.rossi', { visibility: 'visible' },'s+=1.7')  
       .from('.rossi', 2, { y: 100 , ease:Power2.easeOut },'s+=1.7')
    ; 

  }, 

  cldPopup: function() {

    
    $('.js-open--cld').on('click',  function(evt) {
      evt.preventDefault();
      
      var cld = new TimelineLite(),
      main = $('.cld-popup');
      
      cld
        .set(main, { display: 'block' })
        .set(main.find('h3'), { visibility: 'visible' })
        .to('.cld-detail', .3,{ skewX: 0, left: '50%', ease:Power2.easeOut },'s')
        .to(main.find('h3'), 1, { skewX: 0, left: 0, ease:Back.easeOut.config(1) },'s+=0.1')
      ;

    });


    $('.js-close--cld').on('click', function(event) {
      event.preventDefault();
      var cld = new TimelineLite(),
         main = $('.cld-popup');

      cld
        .to('.cld-detail', .3, { left:-2000 })
        .to(main.find('h3'), 1,{ left:-200 })
        .set(main, { display: 'none' },'-=1')
        .set(main.find('h3'), { visibility: 'hidden' },'-=1')
        .set('.cld-detail, .cld-popup h3 ', { skewX: 100 },'-=1')
      ;
    });

  },

  contestantPopup: function() {

    hcontestant.init();

    $('.js-contestant').on('click', function(evt) {
      evt.preventDefault();
      
      var ctt = new TimelineLite(),
      main = $('.contestant-popup');
      
      ctt
        .set(main, { display: 'block' })
        .set(main.find('h3'), { visibility: 'visible' })
        .to('.contestant-detail', .3,{ skewX: 0, left: '50%', ease:Power2.easeOut },'s')
        .to(main.find('h3'), 1, { skewX: 0, left: 0, ease:Back.easeOut.config(1) },'s+=0.1')
      ;
       setTimeout(function(){ 
        sContest.tinyscrollbar_update();
      }, 300);

      
    });


    $('.js-close--ctt').on('click',  function(evt) {
      evt.preventDefault();

      var ctt = new TimelineLite(),
      main = $('.contestant-popup');

      ctt
        .to('.contestant-detail', .3, { left:-2000 })
        .to(main.find('h3'), 1,{ left:-200 })
        .set(main, { display: 'none' },'-=1')
        .set(main.find('h3'), { visibility: 'hidden' },'-=1')
        .set('.contestant-detail, .contestant-popup h3 ', { skewX: 100 },'-=1')
      ;
    });

  },

  datepicker: function() {

    var $date = $('.docs-date');
    $date.datepicker({format:'dd-mm-yyyy',date: new Date(1999, 1, 01)});

  },

  scroll: function() {


    $('#nav li a').on('click', function(event) {
      event.preventDefault();
      var address = $(this).attr('role'),
          offset = Math.round($('#'+address).offset().top); 

      TweenLite.to(window, 1, {scrollTo:offset});
      $('#nav li a').removeClass('active');
      $(this).addClass('active');

      if( getDocumentSize(0) < 1025) {
        $('nav').hide();
        $('.btn-menu').removeClass('menu-open').addClass('menu-closed');
      }


    });

    $('.js-joinnow').on('click', function(evt) {
      evt.preventDefault();
      //$('.js-about--tabs li:eq(1)').trigger('click');
      var address = $(this).attr('role'),
          offset = Math.round($('#'+address).offset().top);

      TweenLite.to(window, 1, {scrollTo:offset});
    });

  },

  deeplink: function() {

    var hashTag = location.hash;
        hashTag = hashTag.substring(1, hashTag.length);

      if(hashTag) {
        var offset = Math.round($('#'+hashTag).offset().top);
      }
      
      switch(hashTag) {
          case 'term':
              TweenLite.to(window, 1, {scrollTo: offset});
              break;
          case 'register':
              TweenLite.to(window, 1, {scrollTo: offset});
              break; 
          case 'main':
              TweenLite.to(window, 1, {scrollTo: offset});
              break; 
          case 'about':
              TweenLite.to(window, 1, {scrollTo: offset});
              break;
          case 'plan':
              TweenLite.to(window, 1, {scrollTo: offset});
              break; 
          case 'news':
              TweenLite.to(window, 1, {scrollTo: offset});
              break;
          case 'gallery':
              TweenLite.to(window, 1, {scrollTo: offset});
              break;                 

      }

  },

  disable: function() {

    $('.btn.disable').on('click', function(event) {
      event.preventDefault();
    });

  },

  countDown: function() {

    const countdown = new Date("August 8, 2018");

    function getRemainingTime(endtime) {
      const milliseconds = Date.parse(endtime) - Date.parse(new Date());
      // const seconds = Math.floor( (milliseconds/1000) % 60 );
      // const minutes = Math.floor( (milliseconds/1000/60) % 60 );
      // const hours = Math.floor( (milliseconds/(1000*60*60)) % 24 );
      const days = Math.floor( milliseconds/(1000*60*60*24) );


      
      return {
        // 'total': milliseconds,
        // 'seconds': seconds,
        // 'minutes': minutes,
        // 'hours': hours,
        'days': days,
      };
    }
      
    function initClock(id, endtime) {
      const counter = document.getElementById(id);
      const daysItem = $('.js-countdown-days');
      // const hoursItem = counter.querySelector('.js-countdown-hours');
      // const minutesItem = counter.querySelector('.js-countdown-minutes');
      // const secondsItem = counter.querySelector('.js-countdown-seconds');
     
      function updateClock() {
        const time = getRemainingTime(endtime);

        $('.js-countdown-days').html(time.days);
        // hoursItem.innerHTML = ('0' + time.hours).slice(-2);
        // minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
        // secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

        if (time.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      const timeinterval = setInterval(updateClock, 1000);
    }

    initClock('js-countdown', countdown);

  },

  news: function() {
    $('.js-news').slick({
      arrows: true,
      dots: true,
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            centerMode: false,
            dots: false,
          }
        },
        {
          breakpoint: 567,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
          }
        },
      ]
    });
	
	$('.video-multiple-items').slick({
      arrows: true,
      dots: false,
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            centerMode: false,
            dots: false,
          }
        },
        {
          breakpoint: 567,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
          }
        },
      ]
    });

    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({ triggerElement: "#news", triggerHook: 0.5 })
        .setClassToggle('#news', 'display') 
        .setTween(animate)
        .addTo(controller)  

    var reverse = scene.reverse();    
      scene.reverse(false);   

    function animate() {

      var about = new TimelineLite()
           main = $('#news');

      about
        .from(main.find('h2'), 1, { y: 100 } ,'s')
        .staggerFrom(main.find('.js-news .slick-slide'), 1,  { scale: 0, ease: Expo.easeOut }, 0.1 , 's' )
        .from(main.find('.slick-prev'), 1, { x: -100 } ,'s')
        .from(main.find('.slick-next'), 1, { x: 100 } ,'s')
      ;   

    }

  },

  photo: function() {

    // $('.js-photo').slick({
    //   dots: true,
    //   infinite: true,
    //   slidesPerRow: 4,
    //   rows: 2,
    //   draggable: false,
    //   focusOnSelect: true,
    //   responsive: [
    //       {
    //         breakpoint: 478,
    //         settings: {
    //           slidesPerRow: 1,
    //           rows: 1,
    //         }
    //       }
    //     ]
    // });

  },

  gallery: function() {

    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({ triggerElement: "#gallery", triggerHook: 0.5 })
        .setClassToggle('#gallery', 'display') 
        .setTween(animate)
        .addTo(controller) 

    var reverse = scene.reverse();    
        scene.reverse(false);     

    function animate() {

      var about = new TimelineLite()
           main = $('#gallery');

      about
        .from(main.find('.js-type'), 1, { y: -50 } ,'s')
        .from(main.find('.gallery-filter'), 1, { y: 50 } ,'s')
        .staggerFrom(main.find('.js-img'), 1,  { scale: 0, ease: Expo.easeOut }, 0.1 , 's' )
        .from(main.find('.btn-prev'), 1, { x: -100 } ,'s')
        .from(main.find('.btn-next'), 1, { x: 100 } ,'s')
      ;   

    }


    $('.js-type li').on('click', function() {
      var i = $(this).index();
      var type = $(this).attr('role');

      if( !$(this).hasClass('active')) {
        $(this).parents('.js-type').find('li').removeClass('active');
        $(this).addClass('active');

        $('.gallery-item').removeClass('display');
        $('.gallery-item:eq('+i+')').addClass('display');

        if( type="type-result") {

        } else {
        }

      }

    });


  },

  galleryDetail: function() {

    $('.js-img').on('click', function(evt) {
      evt.preventDefault();
      $('.gallery-detail').show();
    });

    $('.js-close-glr').on('click', function(evt) {
      evt.preventDefault();
      $('.gallery-detail').hide();
    });

  },

  newsDetail: function() {

    $('.js-news--detail').on('click', function(evt) {
      evt.preventDefault();
      $('.news-detail').show();
      $('html').css({'overflow': 'hidden'});
    });
    $('.js-close-news').on('click', function(evt) {
      evt.preventDefault();
      $('.news-detail').hide();
      $('html').css({
        'overflow-y': 'scroll',
        'overflow-x': 'hidden'
      });
    });
  },

  about: function() {

    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({ triggerElement: "#about", triggerHook: 0.5 })
        .setClassToggle('#about', 'display') 
        .setTween(animate)
        .addTo(controller)  
    var reverse = scene.reverse();    
      scene.reverse(false);
          
    function animate() {

      var about = new TimelineLite()
           main = $('#about .about-contain.display');

      about
        .from(('#about > h2'), 1, { y: 50 } ,'s')
        .from(('.js-about--tabs'), 1, { y: 100 } ,'s')
        .from(main.find('.video'), 1, { x: -200 ,ease:Expo.easeOut } ,'s' )
        .staggerFrom(main.find('.copy-about >*'), 1,  { x: 200, ease: Expo.easeOut }, 0.1 , 's' ) 
      ;   

    }


  },

  plan: function() {

    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({ triggerElement: "#plan", triggerHook: 0.5 })
        .setClassToggle('#plan', 'display') 
        .setTween(animate)
        .addTo(controller)

    var reverse = scene.reverse();    
      scene.reverse(false);    
        
    function animate() {

      var about = new TimelineLite()
           main = $('#plan');

      about
        .from(main.find('h2'), 1, { y: 100 } ,'s')
        .staggerFrom(main.find('.plan-list >*'), 1,  { scale: 0, ease: Expo.easeOut }, 0.1 , 's' ) 
      ;   

    }

    if(getDocumentSize(0)< 768) {
      $('.plan-list').slick({
        arrows: true,
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    }
    $('.plan-list .slick-dots li:eq(1)').trigger('click');
    //$('.plan-list .slick-next').trigger('click');

  },

  chaneTab : function() {

    var isRun = false;

    if( getDocumentSize(0) > 1025) {
      var s = $('.js-term');
      s.tinyscrollbar();
      setTimeout(function(){ 
		try{
			s.tinyscrollbar_update();
		  }catch(e){}
      }, 300);
    } else if( getDocumentSize(0) < 769) {
      $('.race-league').slick({ 
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      }); 

      $('.race-league .slick-dots li:eq(1)').trigger('click');

    }



    $('.js-about--tabs li').on('click', function() {
      var i = $(this).index();

      if (isRun) return;
      isRun = true;
      $('.js-about--tabs li').removeClass('active');
      $('#about .about-contain').removeClass('display');
      $(this).addClass('active');
      $('#about .about-contain:eq('+i+')').addClass('display');

      if( getDocumentSize(0) < 769 ) {

        if( $('#race').hasClass('display') ){
        
          $('.race-league').slick({ 
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          });

        } else {
          $('.race-league').slick("unslick");
        }

      }

      isRun = false;

    });


    $('.js-term--tabs li').on('click', function() {
      var i = $(this).index();

      if (isRun) return;
      isRun = true;
      $('.js-term--tabs li').removeClass('active');
      $('#term .term-contain').removeClass('display');
      $(this).addClass('active');
      $('#term .term-contain:eq('+i+')').addClass('display');
      setTimeout(function(){ 
        s.tinyscrollbar_update();
      }, 300);

      // if( getDocumentSize(0) < 769 ) {

      //   if( $('#race').hasClass('display') ){
        
      //     $('.race-league').slick({ 
      //       dots: false,
      //       arrows: false,
      //       infinite: true,
      //       slidesToShow: 1,
      //       slidesToScroll: 1,
      //     });

      //   } else {
      //     $('.race-league').slick("unslick");
      //   }

      // }

      isRun = false;

    });

  }

}


function showAlert(){
  $('.alert').show();
}
function hideAlert(){
  $('.alert').hide();
}

var sContest = $('.cld-h');
var hcontestant =  {

  init: function() {
    if( getDocumentSize(0) > 1025) {
    
      sContest.tinyscrollbar();
     
    }
  },
  
}
