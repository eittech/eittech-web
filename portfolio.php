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
    <title><?php echo $lang['portfolio']['title']; ?></title>
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

<body onload="init();" class="color-custom style-simple button-flat layout-full-width no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right mobile-tb-center mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2081">
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
									if($config['config']['menu']['portfolio']['active'] == 1){
									  
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
                        <div class="section mcb-section dark bg-cover" style="padding-top:250px; padding-bottom:0px; background-color:#524596; background-image:url(images/pixeles-01-01.png); background-repeat:no-repeat; background-position:right bottom">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix animate" data-anim-type="fadeInLeft">
                                                <h2><?php echo $lang['portfolio']['title_header']; ?></h2>
                                                <hr class="no_line" style="margin:0 auto 150px">
                                               
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

        <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="section section-filters">
                       <div class="section_wrapper clearfix">
                           <div id="Filters" class="column one isotope-filters" style='margin-top:30px;'>
                             <!-- <ul class="filters_buttons">
                                    <li class="label">
                                       Filtro
                                    </li>
                                    <li class="categories">
                                        <a class="open" href="#"><i class="icon-docs"></i>Categorias<i class="icon-down-dir"></i></a>
                                    </li>
                                </ul>-->
                                <div class="filters_wrapper" style='display:block;'>
                                    <ul class="categories">
                                        <li>
                                            <a data-rel=".category-web" href="#">Web</a>
                                        </li>
                                        <li>
                                            <a data-rel=".category-design" href="#"><?php echo $lang['portfolio']['filter1_text']; ?></a>
                                        </li>
					<li>
                                            <a data-rel=".category-marketing" href="#">Marketing</a>
                                        </li>
					<li class="reset">
                                        	<a class="close" data-rel="*" href="portfolio-full-filtering.html"> <?php echo $lang['portfolio']['filter2_text']; ?>
                                    	</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
			</br>
			</br>
			</br>
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <!-- One full width row-->
                            <div class="column one column_portfolio">
                                <div class="portfolio_wrapper isotope_wrapper">
                                    <ul class="portfolio_group lm_wrapper isotope grid">
<!-- Portfolio Aemm Logo-->
										<!--CATEGORIA-->
                                        <li class="portfolio-item isotope-item category-design">
                                            <div class="portfolio-item-fw-bg flv_style_port_1">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_aemm_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_aemm_logo.png" class="scale-with-grid wp-post-image" alt="aemm_logo_open.png" />
                                                            </a>
															<!--BOTONES-->
                                                            <div class="image_links single">
                                                                <a href="images/portafolio_aemm_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
													<!--TITULO-->
                                                    <div class="desc">
                                                        <div class="title_wrapper">
															<h3 class="entry-title"><a href="images/portafolio_aemm_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - AEMM</a></h3> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio Prot Web -->
                                        <li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_proittechnologies_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_proittechnologies_web.png" class="scale-with-grid wp-post-image" alt="proittechnologies_web_open.png" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/portafolio_proittechnologies_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://proittechnologies.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_proittechnologies_web_open.png" class="zoom" rel="prettyphoto">Web - Proittechnologies</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
<!-- Portfolio Proit Papelería -->
                                        <li class="portfolio-item isotope-item category-design">
                                            <div class="portfolio-item-fw-bg flv_style_port_3">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_proit_papeleria_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_proit_papeleria.png" class="scale-with-grid wp-post-image" alt="portafolio_proit_papeleria_open" />
                                                            </a>
                                                            <div class="image_links single">
                                                                <a href="images/portafolio_proit_papeleria_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_proit_papeleria_open.png" class="zoom" rel="prettyphoto">Papeleria - Proittechnologies</a></h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
              
<!-- Portfolio Torq Serigrafía -->
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_torq_serigrafia_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_torq_serigrafia.png" class="scale-with-grid wp-post-image" alt="portafolio_torq-open"/>
                                                            </a>
                                                            <div class="image_links single">
                                                                <a href="images/portafolio_torq_serigrafia_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_torq_serigrafia_open.png" class="zoom" rel="prettyphoto">Torq - Diseño Serigrafico</a></h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
<!-- Portfolio Engpower Web-->
                                        <li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_engpower_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_engpower_web.png" class="scale-with-grid wp-post-image" alt="portafolio_engpower_web_open.png" />
                                                            </a>
                                                               <div class="image_links double">
                                                                <a href="images/portafolio_engpower_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://engpowerangola.com" target="_blank" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_engpower_web_open.png" class="zoom" rel="prettyphoto">Web - Engpower</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio artmakeuproom web

                                        <li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_amr_web.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_amr_web_open.png" class="scale-with-grid wp-post-image" alt="portafolio_amr_web_open.png" />
                                                            </a>
                                                               <div class="image_links double">
                                                                <a href="images/portafolio_amr_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href=http://artmakeuproom.com target="_blank" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_engpower 1200x800.png" class="zoom" rel="prettyphoto">Web - Art makeup room</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										-->

<!-- Portfolio tecnopoli web
									 <li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/tecnopolis_webportafolio__open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_tecnopolis_web.png" class="scale-with-grid wp-post-image" alt="portafolio_tecnopolis_web_open.png" />
                                                            </a>
                                                               <div class="image_links double">
                                                                <a href="images/portafolio_tecnopolis_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href=http://sps.eittech.net/tecnopolis/index.php target="_blank" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_tecnopolis_web_open.png" class="zoom" rel="prettyphoto">Web - Tecnopolis</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
										-->
<!-- Portfolio Alicay Logo-->
                                         <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_alicay_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_alicay_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_alicay_logo_open" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_alicay_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_alicay_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - alicay</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio Art Makeup Room Logo-->
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_amr_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_amr_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_amr_logo_open" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_amr_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_amr_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - Art Makeup Room</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
<!-- Portfolio Tecnopolis Logo-->
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_tecnopolis_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_tecnopolis_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_tecnopolis_logo_open" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_tecnopolis_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_tecnopolis_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - Tecnopolis</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
<!-- Portfolio torq Logo-->
										    <li class="portfolio-item isotope-item category-design">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_torq_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_torq_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_torq_logo_open"/>
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_torq_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_torq_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - Torq </a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio arawacs Logo-->
										    <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_arawacs_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_arawacs_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_arawacs_logo_open.png" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_arawacs_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_arawacs_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - Arawacs</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
<!-- Portfolio m3uniformes Logo-->
										    <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                             <a href="images/portafolio_m3uniformes_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_m3uniformes_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_m3uniformes_logo_open.png" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_m3uniformes_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"> <a href="images/portafolio_m3uniformes_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - M3 Uniformes</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio Paz verde Logo-->
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_pazverde_logo_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_pazverde_logo.png" class="scale-with-grid wp-post-image" alt="portafolio_pazverde_logo_open.png" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/portafolio_pazverde_logo_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_pazverde_logo_open.png" class="zoom" rel="prettyphoto">Logotipo - Soluciones Paz Verde</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
<!-- Portfolio Torq Web -->
										 <li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_torq_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_torq_web.png" class="scale-with-grid wp-post-image" alt="portafolio_torq_web_open.png" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/portafolio_torq_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://torqbiking.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_torq_web_open.png" class="zoom" rel="prettyphoto">Web - Torq</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

<!-- Portfolio Arawacs Web -->
										<li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_arawacs_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_arawacs_web.png" class="scale-with-grid wp-post-image" alt="portafolio_arawacs_web_open.png" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/portafolio_arawacs_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://arawacs.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_arawacs_web_open.png" class="zoom" rel="prettyphoto">Web - Arawacs</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

										
<!-- Portfolio M3uniformes Web -->
                                       	<li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_m3uniformes_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_m3uniformes_web.png" class="scale-with-grid wp-post-image" alt="/portafolio_m3uniformes_web_open.png" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/portafolio_m3uniformes_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://m3uniformes.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_m3uniformes_web_open.png" class="zoom" rel="prettyphoto">Web - M3 Uniformes</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

<!-- Portfolio Nextacai Web -->
                                       	<li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/portafolio_nextacai_web_open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/portafolio_nextacai_web.png" class="scale-with-grid wp-post-image" alt="nextacai_web_open.png" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/portafolio_nextacai_web_open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://nextacai.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/portafolio_nextacai_web_open.png" class="zoom" rel="prettyphoto">Web - Next acaí</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										
										
 <!-- Para Web 
										<li class="portfolio-item isotope-item category-web ">
                                            <div class="portfolio-item-fw-bg flv_style_port_2">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="images/arawacs-web-open.png" class="zoom" rel="prettyphoto">
                                                                <div class="mask"></div><img width="576" height="450" src="images/arawacs-web.png" class="scale-with-grid wp-post-image" alt="proittechnologies" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="images/arawacs-web-open.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
																<a href="http://arawacs.com" class="link" target="_blank"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="images/arawacs-web-open.png" class="zoom" rel="prettyphoto">Web - Arawacs</a></h3>
                                                           
                                                        </div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </li>										-->	
										
										
 <!-- Para Desing 
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="#">
                                                                <div class="mask"></div><img width="576" height="450" src="images/paz-verde1.png" class="scale-with-grid wp-post-image" alt="portfolio_8" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/spv.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="#">Logotipo - Soluciones Paz Verde</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>													-->	
										
										
										
<!-- Para Fotografía 
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="#">
                                                                <div class="mask"></div><img width="576" height="450" src="images/paz-verde1.png" class="scale-with-grid wp-post-image" alt="portfolio_8" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/spv.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="#">Logotipo - Soluciones Paz Verde</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>													-->
										
										
<!-- Para Serigrafía 
                                        <li class="portfolio-item isotope-item category-design ">
                                            <div class="portfolio-item-fw-bg">
                                                <div class="portfolio-item-fw-wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="#">
                                                                <div class="mask"></div><img width="576" height="450" src="images/paz-verde1.png" class="scale-with-grid wp-post-image" alt="portfolio_8" />
                                                            </a>
                                                               <div class="image_links single">
                                                                <a href="images/spv.png" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="title_wrapper">
                                                            <h3 class="entry-title"><a href="#">Logotipo - Soluciones Paz Verde</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>													-->


			




                                    </ul>
                                   <!-- <div class="column one pager_wrapper">
                                        <div class="pager">
                                            <div class="pages">
                                                <a href="#" class="page active">1</a><a href="#" class="page">2</a><a href="#" class="page">3</a>
                                            </div><a class="next_page" href="#">Next page<i class="icon-right-open"></i></a>
                                        </div>
                                    </div> -->

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
		if($config['config']['footer']['portfolio']['active'] == 1){
		  
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
