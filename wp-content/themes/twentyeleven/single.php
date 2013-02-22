<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php
	$post = $wp_query->post;
	if(in_category('ministerios')){
		include(TEMPLATEPATH.'/single-ministerios.php');
		}elseif(in_category('organizacoes')){
			include(TEMPLATEPATH.'/single-organizacoes.php');
			}elseif(in_category('unioes')){
				include(TEMPLATEPATH.'/single-unioes.php');
				}
?>

<?php get_footer(); ?>