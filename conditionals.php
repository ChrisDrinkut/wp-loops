
/**
** Get one of two types of whatevers/ in this case thumbnail or images of dif. sizes
**/

	<?php if ( is_home() ) 
	
	{ the_post_thumbnail( 'medium_large' ); }

	else 
	
	{ the_post_thumbnail( array( 300, 9999 ) ); }
 	
?>


/**
* Get something if something/page
**/ 

	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
  
  
  
