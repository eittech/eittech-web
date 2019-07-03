<?php

// Cargamos el archivo de fijación de idioma
include "lang.php";

// Cargamos archivo de configuraciones globales
include "config.php";

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Compañia</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/index/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic,800'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Nunito+Sans:100,300,400,400italic,500,700,700italic,800'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure_alt.css'>
    <link rel='stylesheet' href='css/robotics_alt.css'>
    <link rel='stylesheet' href='css/custom_alt.css'>

</head>

<body onload="init();" class="color-custom style-simple -flat layout-full-width no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right mobile-tb-center mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2081">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                
								
								<div class="logo" id="animation_container" style="width:133px; height:69px">
								<canvas id="canvas" width="133" height="69" style="position: absolute; display: block; "></canvas>
								<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:133px; height:69px; position: absolute; left: 0px; top: 0px; display: block;">
								</div>
								</div>
 									<div class="menu_wrapper">
                                    <nav id="menu">
                                    <!-- Inclusión del menú -->
									<?php 
									if($config['config']['menu']['company']['active'] == 1){
									  
										include "menu.php";

									} 
									?>
                                    </nav>
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section dark bg-cover" style="padding-top:300px; padding-bottom:0px;background-image:url(images/mundo-coworking.png); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix animate" data-anim-type="fadeInLeft">
                                                <h1><strong>eittech</strong> es<br> 
													una empresa consultora<br> 
                                                    especializada en <br>
													transformación digital.
                                                    </h1>
                                                <hr class="no_line" style="margin:0 auto 150px">
                                                <p>
                                                   Combinamos lo mejor de las tecnologías de la información <br>y del marketing para ayudar a nuestros clientes <br> a enfrentar sus desafíos comerciales más difíciles.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="sections_group">
                                <div class="entry-content">
                                    <div class="section flv_sections_11">
                                        <div class="section_wrapper clearfix">
                                            <div class="items_group clearfix">
                                                <!-- Page Title-->
                                                <!-- One full width row-->
                                                <!--<div class="column one column_fancy_heading">
                                                    <div class="fancy_heading fancy_heading_icon">
                                                        <h2 class="title">About us</h2>
                                                    </div>
                                                </div>
                                                One Third (1/3) Column -->
                                                <div class="column one-third column_column">
                                                    <div class="column_attr ">
                                                        <h3 class="themecolor">  </h3>
                                                        <br>
                                                        <br>
                                                        
                                                        <p>
                                                            <span class="big">Estamos construyendo plataformas y productos en los que creemos; con la certeza de que tiene un gran valor ayudar a los demás, estén donde estén, simplificando lo que sea que hagan y haciendo sus productos más visibles.</span>
                                                        
                                                    </div>
                                                </div>
                                                <!-- One Third (1/3) Column 
                                                <div class="column one-third column_column">
                                                    <div class="column_attr ">
                                                        <br>
                                                        <h3 class="themecolor">Mision</h3>
                                                        <p>
                                                            <span class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</span>
                                                        </p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- One Third (1/3) Column 
                                                <div class="column one-third column_column">
                                                    <div class="column_attr ">
                                                        <br>
                                                        <h3 class="themecolor">Passion</h3>
                                                        <p>
                                                            <span>We love working with WordPress. Themes based on this web software gives unlimited possibilities.</span>
                                                        </p>
                                                        <p>
                                                            Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Page devider -->
                                                <!-- One full width row-->
                                                <div class="column one column_divider">
                                                    <hr class="flv_margin_40" />
                                                </div>
                                                <!-- One full width row-->


                                                <!-- One full width row-->
                                                <!--<div class="column one column_slider">
                                                    Slider Content -->
                                                    <!--<div class="content_slider ">
                                                        <ul class="content_slider_ul">
                                                            <li class="content_slider_li_1">
                                                                <a href="typography.html"><img width="890" height="470" src="images/shortcodes_slider_1.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_1" />
                                                                </a>
                                                            </li>
                                                            <li class="content_slider_li_2">
                                                                <a href="boxes-infographics.html"><img width="890" height="470" src="images/shortcodes_slider_2.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_2" />
                                                                </a>
                                                            </li>
                                                            <li class="content_slider_li_3">
                                                                <a href="content-blocks.html"><img width="890" height="470" src="images/shortcodes_slider_3.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_3" />
                                                                </a>
                                                            </li>
                                                            <li class="content_slider_li_4">
                                                                <a href="content-elements.html"><img width="890" height="470" src="images/shortcodes_slider_4.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_4" />
                                                                </a>
                                                            </li>
                                                            <li class="content_slider_li_5">
                                                                <a href="loops.html"><img width="890" height="470" src="images/shortcodes_slider_5.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_5" />
                                                                </a>
                                                            </li>
                                                        </ul><a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                                        <div class="slider_pagination"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <br>
                                    <div class="section" id="googlefonts flv_sections_16">
                                            <div class="section_wrapper clearfix">
                                                <div class="items_group clearfix">
                                                    <!-- One full width row-->
                                                   
                                                    <!-- One full width row-->
                                                    <div class="column one column_column">
                                                        <div class="column_attr ">
                                                           <!-- <div class="aligncenter">
                
                                                                <div class="google_font flv_style_60">
                                                                    <h1>Quisque lorem tortor fringilla sed</h1> 
                                                                </div>-->
                                                                <br>
                
                                                                <div style="text-align:justify" class="google_font flv_style_59">
                                                                    <h3> Los clientes son la razón por la que existimos, estamos en el negocio para servirles. Nunca es fácil guiarlos a hacer lo acertado pero nos esforzamos en proporcionar las soluciones tecnológicas adecuadas para ello, incluso cuando lo que es correcto no es lo que es popular. </h3><h3>  En <strong>eittech</strong>, estamos formando un equipo fuerte y diverso de personas curiosas y creativas que quieren darle sentido a su trabajo y ayudar a los demás al mismo tiempo. Nuestro propósito es hacer que la vida sea un poco mejor, para nuestros equipo esto significa crear un entorno donde las personas se sientan valoradas y apoyadas, para nuestros clientes esto significa guiarlos a través de los giros y vueltas que conforman su panorama digital. </h3>        
																	<h3> Buscamos desafíos que nos ayuden a crecer individualmente y en conjunto, nos empujamos a nosotros mismos y a nuestro equipos a seguir avanzando:</h3> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="section dark themebg center flv_sections_19">
                                        <div class="section_wrapper clearfix">
                                            <div class="items_group clearfix">
                                                <!-- One full width row-->
                                                <div class="column one column_column">
                                                    <div class="column_attr ">
                                                        <br>
                                                        <p class="flv_style_8">
                                                            <br>
                                                            <h2> El resultado es que creamos un lugar en el que se realizan  
                                                            <br> muchos tipos de trabajos — y se realizan bien —, todo mientras
                                                            <br>  colaboramos con personas a las que respetamos y admiramos.</h2>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="section flv_sections_13">
                                        <div class="section_wrapper clearfix">
                                            <div  class="items_group clearfix">
                                                <!-- One Fourth (1/4) Column -->
                                                <br>

                                                <div class="column one-third column_counter">
													<!-- Counter area-->
                                                    <div class="quick_fact animate-math">
                                                        <div class="number" data-to="5">
                                                            0
                                                        </div>
                                                        <h3 class="title"> Paises</h3>
                                                        <hr class="hr_narrow" />
                                                        <div class="desc">
                                                            Angola, Brasil, Chile, Estados Unidos y Venezuela
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- One Fourth (1/4) Column -->
                                                <div class="column one-third column_counter">
                                                    <!-- Counter area-->
                                                    <div class="quick_fact animate-math">
                                                        <div class="number" data-to="44">
                                                            0
                                                        </div>
                                                        <h3 class="title">Proyectos</h3>
                                                        <hr class="hr_narrow" />
                                                        <div class="desc">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- One Fourth (1/4) Column -->
                                                <div class="column one-third column_counter">
                                                    <!-- Counter area-->
                                                    <div class="quick_fact animate-math">
                                                        <div class="number" data-to="6">
                                                            0
                                                        </div>
                                                        <h3 class="title">Años de Experiencia</h3>
                                                        <hr class="hr_narrow" />
                                                        <div class="desc">
                                                            Desde 2013
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <input id="idiom" type="hidden" value="<?php echo $idiom; ?>">
        
        <!-- Inclusión del footer -->
		<?php 
		if($config['config']['footer']['company']['active'] == 1){
		  
			include "footer.php";

		} 
		?>
    </div>


    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="js/logo.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("87CDC9314A2641439ED2AE6FAFD41C19");
	var lib=comp.getLibrary();
	handleComplete({},comp);
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	exportRoot = new lib.eittech_414x69();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>



</body>

</html>
