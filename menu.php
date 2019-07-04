<style>
	
/*Fijamos los estilos para el menú de la página actual*/
.current_page_menu {
	font-style: italic !important;
	text-decoration: underline !important;
	color: #ffffff !important;
	font-weight: 900 !important;
}

</style>

<ul id="menu-menu" class="menu menu-main">
<?php foreach($lang['menu'] as $key_m => $menu){?>
	<?php if($key_m != 'language'){ ?>
		<li <?php if($key_m == $page_name){ echo 'class="current_page_menu"'; } ?> >
			<a href="<?php echo $key_m.".php".$idiom; ?>"><span><?php echo $menu; ?></span></a>
		</li>
	<?php }else{ ?>
		<li class="nav-item dropdown hidden-xs hidden-sm" id="li_language">
			<a class="nav-link smooth-scroll dropdown-toggle count-info page-scroll" data-toggle="dropdown" href="#" title="Idioma">
				<!--<img src="images/language.png">-->
				<span class="label label-warning" id="span_num_respuestas"><?php echo $menu; ?></span>
			</a>
			<ul class="dropdown-menu" style="background-color: #5d68ae !important;color:#FFFFFF !important">
				<?php foreach($lang['language'] as $key_l => $language){?>
				<li>
					<a class="nav-link smooth-scroll" href="<?php echo $page_name;?>.php?lang=<?php echo $key_l; ?>" style="color:#f2f2f2 !important">
						<div>
							<b><?php echo $language; ?></b>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<?php } ?>
			</ul>
		</li>
	<?php } ?>
<?php } ?>
</ul>
