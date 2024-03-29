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
    <title><?php echo $lang['service']['title']; ?></title>
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
									if($config['config']['menu']['service']['active'] == 1){
									  
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
                        <div class="section mcb-section dark bg-cover" style="padding-top:250px; padding-bottom:0px; background-color:#4A3B80; background-image:url(images/pixeles-01-01.png); background-repeat:no-repeat; background-position:right bottom">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix animate" data-anim-type="fadeInLeft">
                                                <h2><?php echo $lang['service']['title_header']; ?></h2>
                                                <hr class="no_line" style="margin:0 auto 150px">
                                                <h3> 
													
													<?php echo $lang['service']['subtitle_header']; ?>
												
											   </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        



             <!-- Main Content -->
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content">
                            <div class="section flv_sections_17">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_column">
                                            <div class="column_attr ">
                                                <span class="single_icon icon_center themecolor"><i class="flv_style_7"></i></span>
                                            </div>
                                        </div>
                                        <!-- Three Fourth (3/4) Column -->
                                        
                                    </div>
                                </div>
                            </div>
    
                            <div class="section section-border-top flv_sections_18">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_column">
                                            <div class="column_attr ">
                                                <h6 class="flv_margin_b_5"><?php echo $lang['service']['group_title']; ?></h6>
                                            </div>
                                        </div>
                                        <!-- Three Fourth (3/4) Column -->
                                        <div class="column three-fourth column_column">
                                            <div class="column_attr ">
                                                <br><br><br>
												<p>
                                                    <span><?php echo $lang['service']['group_text']; ?></span>
                                                </p>
                                                <div class="hr_dots flv_style_5">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <h5><?php echo $lang['service']['group_column1_title']; ?></h5>
                                                    <ul class="list_mixed">
                                                        <li class="list_star">
                                                         <?php echo $lang['service']['group_column1_text1']; ?>
                                                        </li>
                                                        <li class="list_star">
                                                         <?php echo $lang['service']['group_column1_text2']; ?>
                                                        </li>
                                                        <li class="list_star">
                                                         <?php echo $lang['service']['group_column1_text3']; ?>
                                                        </li>
                                                        <li class="list_star">
                                                         <?php echo $lang['service']['group_column1_text4']; ?>
                                                        </li>
                                                        <li class="list_star">
                                                         <?php echo $lang['service']['group_column1_text5']; ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <br>
                                                    <h5>   </h5>
                                                    <ul class="list_mixed">
                                                        <li class="list_star">
                                                          <?php echo $lang['service']['group_column2_text1']; ?>                                                 
                                                        </li>
                                                        <li class="list_star">
                                                          <?php echo $lang['service']['group_column2_text1']; ?>                                                     
                                                        </li>
                                                    </ul>
                                                </div>

                                            
                                                <!-- Three Fourth (3/4) Column -->
                                                <div class="column three-fourth column_column">
                                                    <div class="column_attr ">
                                                       
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <h5><?php echo $lang['service']['group_column3_title']; ?></h5>
                                                            <ul class="list_mixed">
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column3_text1']; ?>
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column3_text2']; ?>
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column3_text3']; ?>                
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column3_text4']; ?>
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column3_text5']; ?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            
                                                            <h5> <?php echo $lang['service']['group_column4_title']; ?>  </h5>
                                                            <ul class="list_mixed">
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column4_text1']; ?>                                                 
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column4_text2']; ?>
                                                                </li>
                                                                <li class="list_star">
                                                                 <?php echo $lang['service']['group_column4_text3']; ?>                                                      
                                                                </li>
                                                                </li>
                                                            </ul>
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



				
				
				
				
				
				
				
				

            <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#f2f3f4">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix" style="padding:40px 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-fifth column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>


                                      <div class="column mcb-column three-fifth column_column">
                                            <div style="text-align: justify;" class="column_attr clearfix">
                                                <br>
                                    
                                                <h3>
                                                  <?php echo $lang['service']['wrap1_text']; ?>
                                                </h3>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:50px; padding-bottom:50px; background-color:#f2f3f4">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_icon_box ">
                                            <div class="icon_box icon_position_left no_border">
                                                <div class="image_wrapper">
                                                    <img src="images/adopcion.png" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4 class="title"><?php echo $lang['service']['icon_box1_text']; ?></h4>
                                                    <div class="desc">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_icon_box ">
                                            <div class="icon_box icon_position_left no_border">
                                                <div class="image_wrapper">
                                                    <img src="images/participacion.png" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4 class="title"><?php echo $lang['service']['icon_box2_text']; ?></h4>
                                                    <div class="desc">
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_icon_box ">
                                            <div class="icon_box icon_position_left no_border">
                                                <div class="image_wrapper">
                                                    <img src="images/satisfaccion.png" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4 class="title"><?php echo $lang['service']['icon_box3_text']; ?></h4>
                                                    <div class="desc">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
				
				
				<!--
				<div class="section mcb-section dark" style="padding-top:80px; padding-bottom:40px; background-color:#313b46">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column  column-margin-10px">
                                            <div class="column_attr clearfix align_center">
                                                <h2>Solicitar oferta por correo electrónico</h2>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
                                                <div id="mc4wp-form-1" class="form mc4wp-form">
                                                    <form id="newsletterform" class="newsletter_form">
                                                        <input placeholder="Tu Correo Electronico" type="email" id="email_news" name="email_news" size="40" aria-required="true" aria-invalid="false" />
                                                        <input type="button" value="OK" id="submit" onClick="return check_values_news()">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					-->

                    </div>
                </div>
            </div>
        </div>
        
        <input id="idiom" type="hidden" value="<?php echo $idiom; ?>">
        
        <!-- Inclusión del footer -->
		<?php 
		if($config['config']['footer']['service']['active'] == 1){
		  
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
    <script src="js/email.js"></script>
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
