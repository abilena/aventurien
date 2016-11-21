<?php global $SMTheme;?>
  
    </div>
    </div>
</div>
<?php	
if ($SMTheme->get( 'social', 'showsocial')) {
	$SMTheme->block_social();
}
?>
<div id='content-bottom' class='container'></div>
<div id='footer'>
	
    <div id='footer-bottom'>
		<div class='container clearfix'>
		<?php if ($SMTheme->get("layout","footerwidgets")) { ?>
		<div class='footer-widgets-container'><div class='footer-widgets'>
			<div class='widgetf'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_1") ) : ?>
				<?php
					$SMTheme->go_func("footer_1");
				?>
				<?php endif; ?>
			</div>
			
			<div class='widgetf'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_2") ) : ?>
				<?php
					$SMTheme->go_func("footer_2");
				?>
				<?php endif; ?>
			</div>
			
			<div class='widgetf widgetf_last'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_3") ) : ?>
				<?php
					$SMTheme->go_func("footer_3");
				?>
				<?php endif; ?>
			</div>
		</div></div>
		<?php } ?>
		<div class='footer_txt'>
			<?php
                    if ($SMTheme->get( "layout","footertext" )) {
                        echo $SMTheme->get( "layout","footertext" );
                    } else { 
                        ?>Copyright &copy; <?php echo date("Y"); ?>  <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a><?php
						echo (get_bloginfo('description'))?' - '.get_bloginfo('description'):'';
                    }
                ?> 
				<?php /* 
					All links in the tag <div class='smthemes'> are attribution of the theme developers and should remain intact. 
					It's protected by Creative Commons License (http://creativecommons.org/licenses/by/3.0/).
					Warning! Your site will not be able to work if these links are edited or deleted.
					You can buy this theme without footer links online at http://smthemes.com/buy/middleearth/
				*/ ?>
				<div class='smthemes'>Designed by <a href='http://yukonshows.com/' target='_blank'>http://yukonshows.com/</a>, thanks to: <a href='http://camicie-cravatte-uomo.com/' target='_blank'>sky3ds</a>, <a href='http://rengzhongchuan6.com/' target='_blank'>ee signal booster</a> and <a href='http://thisdiminishingwest.com/' target='_blank'>hcg injections</a></div>
		</div>
        </div>
</div>
		
		
<?php wp_footer(); ?>

</div> <?php //footer ?>
</div> <?php //all ?>
<?php
	echo $SMTheme->get( "integration","footercode" );
?>
</body>
</html>