var SANMATEO = SANMATEO || {};

$(function() {

	'use strict';
	
	//!!!!!!!!!!!!!!!!!!!!!!
	// Buscadir de Giros
	//!!!!!!!!!!!!!!!!!!!!!!
	$( "#buscaGiros" ).autocomplete({
			source:'plataforma/lib/giros_comerciales.php', 
			minLength:3,
			select: function(event,ui){	var code = ui.item.id;
				if(code !== '') {
					//location.href = '/index.php?id_categoria=' + code;
					 $("#requisitos").load('plataforma/lib/requisitos.php?idr='+code+'&pag=2');
				}
			},
					// optional
			html: true, 
			// optional (if other layers overlap the autocomplete list)
			open: function(event, ui) {
				$(".ui-autocomplete").css("z-index", 1000);
			}
		});
	
   //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
   // forma de registro
   //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
   
   		/// Validamos si el email es un email valido
		function validateEmail(sEmail) {
			
	    	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			
	    	if (filter.test(sEmail)) {
		        return true;
		    } else {
		        return false;
	    	}
		}
			
		$('#email').focusout(function(e) {

	       	 	var sEmail = $('#email').val();
				if (validateEmail(sEmail)) {
					
					 $("#btnsend").removeClass("myBtn myBtn-off myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
					 $("#btnsend").addClass("myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
					 $("#btnsend").prop( "disabled", false );
	
					/// checamos que el correo no exista ya
					var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#email").val();
										  
				 	//hace la búsqueda
				 	$("#resvalemail").delay(1000).queue(function(n) {      
											   
					  $("#resvalemail").html('<img src="assets/images/front-end/ajax-loader.gif" />');
											   
							$.ajax({
								  type: "POST",
								  url: "lib/comprobar_email.php",
								  data: "email="+consulta,
								  dataType: "html",
								  
								  error: function(){
										alert("error petición ajax");
								  },
								  success: function(data){                                                      
										
										n();
										
										if(data === "0"){
											 $("#resvalemail").html('<i class="fa fa-check"></i>');
											 $("#btnsend").removeClass("myBtn myBtn-off myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
											 $("#btnsend").addClass("myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
											 $("#btnsend").prop( "disabled", false );
											 
											
										  } else {
											 $("#resvalemail").html('<span class="text-lightred"><i class="fa fa-exclamation-triangle"></i> Existe ya un registro con este correo, recupere su contraseña y/o trate con otro correo</span>');
											 $("#btnsend").addClass("myBtn myBtn-off myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
											 $("#btnsend").prop( "disabled", true );
										  }
								  }
							  });
													   
						 });
											

	
				} else {

	            $("#resvalemail").html('<span class="text-lightred"><i class="fa fa-exclamation-triangle"></i> Este no es un correo válido, verifíque</span>');
				 $("#btnsend").addClass("myBtn myBtn-off myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10");
				 $("#btnsend").prop( "disabled", true );

	            e.preventDefault();

	        }

	    });
		
		
		///Validamos contraseña segura
		
		$('input[type=password]').keyup(function() {
        // set password variable
        var pswd = $(this).val();
        //validate the length
        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }

			//validate letter
			if ( pswd.match(/[A-z]/) ) {
				$('#letter').removeClass('invalid').addClass('valid');
			} else {
				$('#letter').removeClass('valid').addClass('invalid');
			}

			//validate capital letter
			if ( pswd.match(/[A-Z]/) ) {
				$('#capital').removeClass('invalid').addClass('valid');
			} else {
				$('#capital').removeClass('valid').addClass('invalid');
			}

			//validate number
			if ( pswd.match(/\d/) ) {
				$('#number').removeClass('invalid').addClass('valid');
			} else {
				$('#number').removeClass('valid').addClass('invalid');
			}

		}).focus(function() {
			$('#pswd_info').show();
			
		}).blur(function() {
			$('#pswd_info').hide();
		});

   
		
		  
		  
		// Si todo va bien enviamos los datos a guardar	
		$('#formaRegistro').submit(function(e) {
			
			e.preventDefault();
			var data = $(this).serializeArray();
			
			
			$.ajax({
			url: 'lib/enviocorreoSMA1.php',
			type: 'POST',
			dataType:'json',
			data: data,
			})
			.done(function() {
				$("#contenedorForma").hide();
				$('#gracias').html("<h2>¡Tu registro se guardo correctamente!</h2><p>Revisa tu correo te enviamos un Email con las instrucciones a seguir</p>");        
				
			})
			
			.fail(function() {
				console.log("No lo logre");        
				
			})
			
			.always(function() {
				console.log("No lo logre");    
				
		    });
	
		});
		
		
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 		// ACCEDER LOGIN
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		
		// Si todo va bien enviamos los datos a guardar	
		$('#formaLogin').submit(function(e) {
			
			e.preventDefault();
			var data = $(this).serializeArray();
			
			
				//hace la búsqueda
				 	$("#contenedorLogin").delay(1000).queue(function(n) {      
											   
					  $("#contenedorLogin").html('<img src="assets/images/front-end/ajax-loader.gif" />');
											   
							$.ajax({
								  type: "POST",
								  url: "lib/login_usuario.php",
								  data: data,
								  dataType: "html",
								  
								  error: function(){
										alert("error petición ajax");
								  },
								  success: function(data){                                                      
										//$("#contenedorLogin").html(data);
										n();
										
										if(data === "0"){
											 $("#contenedorLogin").html('<span class="text-lightred"><i class="fa fa-exclamation-triangle"></i> No esite Usuario / Contraseña verifíque </span>');
											
											
										  } else {
											 
											 window.location.href = 'plataforma/';
											
										  }
								  }
							  });
													   
						 });
		  
		});
			

  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // global inicialization functions
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  SANMATEO.global = {

    init: function() {
      SANMATEO.global.deviceSize();
      SANMATEO.global.goToTop();
      SANMATEO.global.animsition();
    },

    // device identification function
    deviceSize: function(){
			var jRes = jRespond([
				{
					label: 'smallest',
					enter: 0,
					exit: 479
				},{
					label: 'handheld',
					enter: 480,
					exit: 767
				},{
					label: 'tablet',
					enter: 768,
					exit: 991
				},{
					label: 'laptop',
					enter: 992,
					exit: 1199
				},{
					label: 'desktop',
					enter: 1200,
					exit: 10000
				}
			]);
			jRes.addFunc([
				{
					breakpoint: 'desktop',
					enter: function() { $body.addClass('device-lg'); },
					exit: function() { $body.removeClass('device-lg'); }
				},{
					breakpoint: 'laptop',
					enter: function() { $body.addClass('device-md'); },
					exit: function() { $body.removeClass('device-md'); }
				},{
					breakpoint: 'tablet',
					enter: function() { $body.addClass('device-sm'); },
					exit: function() { $body.removeClass('device-sm'); }
				},{
					breakpoint: 'handheld',
					enter: function() { $body.addClass('device-xs'); },
					exit: function() { $body.removeClass('device-xs'); }
				},{
					breakpoint: 'smallest',
					enter: function() { $body.addClass('device-xxs'); },
					exit: function() { $body.removeClass('device-xxs'); }
				}
			]);
		},

    // scroll to top
    goToTop: function(){
			$goToTopEl.click(function() {
				$('body,html').stop(true).animate({scrollTop:0},400);
				return false;
			});
		},

		// show gotoTop element
    goToTopScroll: function(){
			if( $body.hasClass('device-lg') || $body.hasClass('device-md') || $body.hasClass('device-sm') ) {
				if($window.scrollTop() > 450) {
					$goToTopEl.fadeIn();
				} else {
					$goToTopEl.fadeOut();
				}
			}
		},

    // initialize animsition

    animsition: function() {
      $wrapper.animsition({
        inClass               :   'fade-in',
        outClass              :   'fade-out',
        inDuration            :    1500,
        outDuration           :    800,
        linkElement           :   '.animsition-link',
        // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
        loading               :    true,
        loadingParentElement  :   'body', //animsition wrapper element
        loadingClass          :   'animsition-loading',
        unSupportCss          : [ 'animation-duration',
          '-webkit-animation-duration',
          '-o-animation-duration'
        ],
        //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

        overlay               :   false,
        overlayClass          :   'animsition-overlay-slide',
        overlayParentElement  :   'body'
      });
    }

  };






  //!!!!!!!!!!!!!!!!!!!!!!!!!
  // header section functions
  //!!!!!!!!!!!!!!!!!!!!!!!!!

  SANMATEO.header = {

    init: function() {
      SANMATEO.header.chooseMenuStyle();
      SANMATEO.header.chooseLogo();
      SANMATEO.header.stickyHeader();
      SANMATEO.header.menuClasses();
      SANMATEO.header.toggleMenu();
    },


    

    // choose if logo need to be light or dark
    chooseLogo: function(){
			if($header.hasClass('light')) {
				if( defaultLightLogo ){ defaultLogo.find('img').attr('src', defaultLightLogo); }
				if( retinaLightLogo ){ retinaLogo.find('img').attr('src', retinaLightLogo); }
			} else {
				if( defaultLogoImg ){ defaultLogo.find('img').attr('src', defaultLogoImg); }
				if( retinaLogoImg ){ retinaLogo.find('img').attr('src', retinaLogoImg); }
			}
		},

    // makes header sticky
    stickyHeader: function( headerOffset ){
			if ($window.scrollTop() > headerOffset) {
				if( ( $body.hasClass('device-lg') || $body.hasClass('device-md') ) && !SANMATEO.isMobile.any() ) {
					$header.addClass('sticky-header');
					$header.removeClass('light');
				} else if( $body.hasClass('device-xs') || $body.hasClass('device-xxs') || $body.hasClass('device-sm') ) {
          if( $header.hasClass('sticky-mobile') ) { $header.addClass('responsive-sticky-header'); }
				} else {
					SANMATEO.header.unStickyHeader();
				}
			} else {
				SANMATEO.header.unStickyHeader();
			}
		},

    // remove sticky class on header
    unStickyHeader: function(){
			if( $header.hasClass('sticky-header') ){
				$header.removeClass('sticky-header');
				$header.removeClass().addClass(oldHeaderClasses);
			}
			if( $header.hasClass('responsive-sticky-header') ){
				$header.removeClass('responsive-sticky-header');
			}
		},

    // class toggling on menu according to windows width
    chooseMenuStyle: function(headerOffset) {
      if( $body.hasClass('device-xs') || $body.hasClass('device-xxs') || $body.hasClass('device-sm')) {
        $header.removeClass('light');
        if( !$header.hasClass('sticky-mobile') ) { SANMATEO.header.unStickyHeader(); }
      } else {
        if( $window.scrollTop() > headerOffset ) { $header.addClass('sticky-header'); }
        if( !$header.hasClass('sticky-header')) { $header.addClass('light'); }
        if( $header.hasClass('dark')) { $header.removeClass('light'); }
      }
    },

    // add sub-menu class to determined menu items
    menuClasses: function() {
      $( '#main-navbar ul li:has(ul)' ).addClass('submenu');

      if( SANMATEO.isMobile.Android() ) {
				$( '#main-navbar ul li.sub-menu' ).children('a').on('touchstart', function(e){
					if( !$(this).parent('li.submenu').hasClass('sfHover') ) {
						e.preventDefault();
					}
				});
			}
    },

    // toggling display of menu
    toggleMenu: function() {
      $menuToggler.click(function() {
				$( '#main-navbar > ul' ).toggleClass("show");
				return false;
			});
    }


  };
  
  
  



  //!!!!!!!!!!!!!!!!
  // extra functions
  //!!!!!!!!!!!!!!!!

  SANMATEO.extra = {

    init: function() {
      SANMATEO.extra.animations();
      SANMATEO.extra.lightbox();
      SANMATEO.extra.counter();
      SANMATEO.extra.progress();
      SANMATEO.extra.mixitup();
    },


    //initialize animations on elements
    animations: function(){

      var $animateEl = $('[data-animate]');

      if( $animateEl.length > 0 ){

        if( $body.hasClass('device-lg') || $body.hasClass('device-md') || $body.hasClass('device-sm') ){

          $animateEl.each(function(){
            var el = $(this),
							  delay = el.attr('data-delay'),
							  delayTime = 0;

						if( delay ) { delayTime = Number( delay ) + 500; } else { delayTime = 500; }

						if( !el.hasClass('animated') ) {
							el.addClass('not-animated');
							var elAnimation = el.attr('data-animate');
							el.appear(function () {
								setTimeout(function() {
									el.removeClass('not-animated').addClass( elAnimation + ' animated');
								}, delayTime);
							},{accX: 0, accY: -120},'easeInCubic');
						}

					});

				}

			}

		},

   
    

    //initialize magnificPopup lightbox
    lightbox: function(){
			var $lightboxImageEl = $('[data-lightbox="image"]'),
          $lightboxIframeEl = $('[data-lightbox="iframe"]'),
          $lightboxGalleryEl = $('[data-lightbox="gallery"]');

			if( $lightboxImageEl.length > 0 ) {
				$lightboxImageEl.magnificPopup({
					type: 'image',
					closeOnContentClick: true,
					closeBtnInside: false,
					fixedContentPos: true,
					image: {
						verticalFit: true
					}
				});
			}

      if( $lightboxIframeEl.length > 0 ) {
				$lightboxIframeEl.magnificPopup({
					disableOn: 600,
					type: 'iframe',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false
				});
			}

			if( $lightboxGalleryEl.length > 0 ) {
				$lightboxGalleryEl.each(function() {
					var element = $(this);

					if( element.find('a[data-lightbox="gallery-item"]').parent('.clone').hasClass('clone') ) {
						element.find('a[data-lightbox="gallery-item"]').parent('.clone').find('a[data-lightbox="gallery-item"]').attr('data-lightbox','');
					}

					element.magnificPopup({
						delegate: 'a[data-lightbox="gallery-item"]',
						type: 'image',
						closeOnContentClick: true,
						closeBtnInside: false,
						fixedContentPos: true,
						image: {
							verticalFit: true
						},
						gallery: {
							enabled: true,
							navigateByImgClick: true,
							preload: [0,1] // Will preload 0 - before current, and 1 after the current image
						}
					});
				});
			}
		},

    

    //initialize countTo
    counter: function(){
      var $counterEl = $('.counter:not(.counter-instant)');
			if( $counterEl.length > 0 ){
				$counterEl.each(function(){
					var element = $(this);
          element.appear( function(){
            SANMATEO.extra.runCounter(element);
          });
				});
			}
    },

    //run countTo
    runCounter: function( counterElement){
			counterElement.find('span').countTo();
		},

    //animate progress bar
    progress: function(){
			var $progressEl = $('.progress');
			if( $progressEl.length > 0 ){
				$progressEl.each(function(){
					var progressBar = $(this),
						  progressValue = progressBar.attr('data-percent');

					if( $body.hasClass('device-lg') || $body.hasClass('device-md') ){
						progressBar.appear( function(){
							if (!progressBar.hasClass('progress-animated')) {
								progressBar.find('.counter-instant span').countTo();
								progressBar.find('.progress-bar').css({width: progressValue + "%"}).addClass('progress-animated');
							}
						},{accX: 0, accY: -120},'easeInCubic');
					} else {
						progressBar.find('.counter-instant span').countTo();
						progressBar.find('.progress').css({width: progressValue + "%"});
					}
				});
			}
		},

    //initialize mixitup

    mixitup: function(){
			if( $mixitupEl.length > 0 ) {
				$mixitupEl.each(function() {
					var element = $(this);

					element.mixItUp();
				});
			}
		}

  };




  //!!!!!!!!!!!!!!!!!!!!
  // check mobile device
  //!!!!!!!!!!!!!!!!!!!!

  SANMATEO.isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (SANMATEO.isMobile.Android() || SANMATEO.isMobile.BlackBerry() || SANMATEO.isMobile.iOS() || SANMATEO.isMobile.Opera() || SANMATEO.isMobile.Windows());
    }
  };



  //!!!!!!!!!!!!!!!!!!!!!!!!!
  // initialize after resize
  //!!!!!!!!!!!!!!!!!!!!!!!!!

  SANMATEO.documentOnResize = {

		init: function(){

      var headerWrapOffset = $headerWrap.offset().top;

      var t = setTimeout( function(){
        SANMATEO.header.chooseMenuStyle(headerWrapOffset);
        SANMATEO.header.chooseLogo();
			}, 500 );

		}

	};






  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // initialize when document ready
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  SANMATEO.documentOnReady = {

		init: function(){
      SANMATEO.global.init();
	  SANMATEO.header.init();
      SANMATEO.documentOnReady.windowscroll();
      SANMATEO.extra.init();
		},

    // run on window scrolling

    windowscroll: function(){

			var headerOffset = $header.offset().top;
			var headerWrapOffset = $headerWrap.offset().top;

			$window.on( 'scroll', function(){

				SANMATEO.global.goToTopScroll();
       			SANMATEO.header.stickyHeader(headerWrapOffset);
				SANMATEO.header.chooseLogo();
      

			});
		}

	};







  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // initialize when document load
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

	SANMATEO.documentOnLoad = {

		init: function(){

		}

	};






  //!!!!!!!!!!!!!!!!!!!!!!!!!
  // global variables
  //!!!!!!!!!!!!!!!!!!!!!!!!!

  var $window = $(window),
      $body = $('body'),
      $wrapper = $('#wrapper'),
      $header = $('#header'),
      $headerWrap = $('#header-wrap'),
      oldHeaderClasses = $header.attr('class'),
      defaultLogo = $('#branding').find('.brand-normal'),
      defaultLogoWidth = defaultLogo.find('img').outerWidth(),
      retinaLogo = $('#branding').find('.brand-retina'),
      defaultLogoImg = defaultLogo.find('img').attr('src'),
      retinaLogoImg = retinaLogo.find('img').attr('src'),
      defaultLightLogo = defaultLogo.attr('data-light-logo'),
      retinaLightLogo = retinaLogo.attr('data-light-logo'),
      $pageTitle = $('#page-title'),
      $menuToggler = $('#main-navbar-toggle'),
      $goToTopEl = $('#gotoTop'),
      $mixitupEl = $('.mix-grid');






  //!!!!!!!!!!!!!
  // initializing
  //!!!!!!!!!!!!!
  $(document).ready( SANMATEO.documentOnReady.init );
  $window.load( SANMATEO.documentOnLoad.init );
  $window.on( 'resize', SANMATEO.documentOnResize.init );

});
