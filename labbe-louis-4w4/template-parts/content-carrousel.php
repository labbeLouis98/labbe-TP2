<?php
/**
 * Template part for displaying page content front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

 global $tPropriete;
?>

<article class="slide__conteneur">
	<div class="slide">
	
		<div class="slide__info">
			<p> <?php echo $tPropriete ['sigle'] . " - " . $tPropriete ['nbHeure'] . " - " . $tPropriete ['typeCours']; ?>
			</p>
			<a href="<?php echo get_permalink(); ?>"> <?php echo $tPropriete ['titre']; ?> </a>
			<p> Session <?php echo $tPropriete ['session']; ?> </p>
		</div>
		
	</div>
</article>
