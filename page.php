<?php 
	global $SMTheme;
	
	get_header();
?>
			
			
			<?php get_template_part('theloop'); ?>
			
			<?php get_template_part('navigation'); ?>

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

<?php
	get_footer();
?>