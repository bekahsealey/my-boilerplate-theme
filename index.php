<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BsMyBoilerplateTheme
 * @since 0.1
 * @version 0.1
 */

?>
<!DOCTYPE html>
<h1>My Boilerplate Theme</h1>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BsMyBoilerplateTheme
 * @since 0.1
 * @version 0.1
 */

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php
endwhile;
else :
	echo '<p>There are no posts!</p>';
endif;
?>

</html>
