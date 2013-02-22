<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2> <?php global $page, $paged; wp_title( '', true, 'right' );?></h2>
		</div>			         				
         
             
<?php single_cat_title(); ?> 

<?php echo category_description( get_category_by_slug('editorial') ); ?> 

<?php echo(get_category_parents($cat, TRUE, ' editorial ')); ?>
        	        
</div>  
<?php get_footer(); ?>