<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php get_header(); ?>
         <div id="Content">
		<div class="ShapeEvent">
			<h2><?php the_title();?></h2>
		</div>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
		<div class="Box2">
				<div class="Bx-img">
					<img src="<?php $key="feature";echo get_post_meta($post->ID,$key,true);?>" title="<?php the_title();?>" alt="<?php the_title();?>" width="312px" height="170 px">
				</div>
				<span  class="title"><h3><?php $key="title";echo get_post_meta($post->ID,$key,true);?></h3></span>
					<p><?php the_content(__('Leia mais'));?></p>
		</div>
        <?php endwhile; else:?>
			 <?php endif;?>	
		<div id="BannerPastor">			
				<div class="BoxBanner">
					<ul class="slides_container">
						<li><img src="<?php bloginfo('template_url'); ?>/img/img-ale1.png" alt="" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/img-ale2.png" alt="" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/img-ale3.png" alt="" /></li>						
					</ul>				
					</div>
		</div>
        				
		</div>
<?php get_footer(); ?>
	
<?php get_footer(); ?>