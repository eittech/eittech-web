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
    <title><?php echo $lang['contact']['title']; ?></title>
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
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138507054-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-138507054-1');
	</script>

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
									if($config['config']['menu']['contact']['active'] == 1){
									  
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
                        <div class="section mcb-section dark bg-contain" style="padding-top:200px; padding-bottom:0px; background-color:#524596; background-image:url(images/con-sop.png); background-repeat:no-repeat; background-position:center top">                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">

                                                <hr class="no_line" style="margin:0 auto 150px">
                                                <h2> <?php echo $lang['contact']['title_header']; ?></h2>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line">
                                        </div>
                                        <div class="column mcb-column one-sixth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
 <!--                                                   <img class="scale-with-grid" src="images/robotics-yellow-dot.png">
-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
												<h5>MCY</h5>
                                                <p>
                                                    <?php echo $lang['contact']['subtitle_header']; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line">
                                        </div>
                                        <div class="column mcb-column one-sixth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="">
                                                </div>
                                            </div>
                                        </div>


										<div class="column mcb-column one column_column">
                 						   <!-- Text Area -->
                 						   <aside id="text-11" class="widget widget_text">
                  						      <div class="textwidget">
                 					           <h5 class="flv_margin_b_5"><i class="icon-email"></i>hello@eittech.net</h5>
                           						 </p>
                           					 <h5 class="flv_margin_b_5"><i class="icon-phone"></i>+58 412 3112308</h5>
                            </p>
                        </div>
                    </aside>
                </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap divider  valign-top clearfix">
                                    <div class="mcb-wrap-inner"></div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column  column-margin-10px">
                                            <div class="column_attr clearfix">
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <h2></h2>
                                            </div>
                                        </div>
                                   <!--  <div class="column mcb-column one column_faq ">
                                            <div class="faq">
                                                <div class="mfn-acc faq_wrapper ">
                                                    <div class="question">
                                                        <div class="title">
                                                            <span class="num"></span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>
                                                        </div>
                                                        <div class="answer">

                                                        </div>
                                                    </div>
                                                    <div class="question">
                                                        <div class="title">
                                                            <span class="num"></span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>
                                                        </div>
                                                        <div class="answer">

                                                        </div>
                                                    </div>
                                              <div class="question">
                                                        <div class="title">
                                                            <span class="num"></span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>
                                                        </div>
                                                        <div class="answer">

                                                        </div>
                                                    </div>
                                                      <div class="question">
                                                        <div class="title">
                                                            <span class="num"></span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>
                                                        </div>
                                                        <div class="answer"> -->

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
        </div>
        
        <input id="idiom" type="hidden" value="<?php echo $idiom; ?>">
        
        <!-- Inclusión del footer -->
		<?php 
		if($config['config']['footer']['contact']['active'] == 1){
		  
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

    <script src="js/email.js"></script><br>
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
