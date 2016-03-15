<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" role="main">
	<div class="row">
		<div class="small-12 columns">
			<nav aria-label="Vous êtes ici:" role="navigation">
				<ul class="breadcrumbs">
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Produits</a></li>
					<li>
						<span class="show-for-sr">Current: </span> Raineuse-PlieusE Touchline CF 375
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="product">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
		<header class="row">
			<div class="small-12 medium-5 columns">
				<div class="small-3 columns">
					<ul class="no-bullet">
						<li><img src="<?php echo get_template_directory_uri () ?>/assets/images/<?php the_field('petite_image_1'); ?>" /></li>
						<li><img src="<?php echo get_template_directory_uri () ?>/assets/images/<?php the_field('petite_image_2'); ?>" /></li>
						<li><img src="<?php echo get_template_directory_uri () ?>/assets/images/<?php the_field('petite_image_3'); ?>" /></li>
					</ul>
				</div>
				<div class="small-9 columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/<?php the_field('image_principale'); ?>" />
				</div>
			</div>
			<div class="small-12 medium-7 columns">
				<h2><?php the_title() ?></h2>
				<div class="note">
					<i class="fa fa-star-o gold"></i>
					<i class="fa fa-star-o gold"></i>
					<i class="fa fa-star-o gold"></i>
					<i class="fa fa-star-o gold"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<hr />
				<section>
					<h3><?php the_field('prix'); ?></h3>
					<div class="tools">
						<a href="#!" class="button">Partager</a> <a href="#!" class="button">Imprimer</a>
					</div>
					<a href="#!" class="button">Contactez-nous</a> <a href="#!" class="button">Voir la vidéo</a>
				</section>
				<hr />
				<ul class="no-bullet download">
					<li><a href="<?php the_field('documentation'); ?>"><i class="fa fa-download"></i> Télécharger la documentation</a></li>
					<li><a href="<?php the_field('doc_gamme'); ?>"><i class="fa fa-download"></i> Télécharger la gamme Touchline</a></li>
				</ul>
			</div>
		</header>
		<section class="row">
			<div class="small-12 columns">
				<?php the_content() ?>
				<table>
					<thead>
   						<tr>
							<td>Caractéristiques de la Raineuse-plieuse CF 375</td>
						</tr>
					</thead>
					<tbody>
						<tr><td>Système de marge par bandes aspirantes - Prise par le dessus</td></tr>
						<tr><td>Capacité margeur 100 mm</td></tr>
						<tr><td>Rectification et contrôle double Oui</td></tr>
						<tr><td>Format mini 105 x 148 mm</td></tr>
						<tr><td>Format maxi 375 x 650 mm</td></tr>
						<tr><td>Grammages de 80 à 400 g/m2</td></tr>
						<tr><td>Réglages Ecran tactile couleur</td></tr>
						<tr><td>Système de rainage Multigraf Swing bar TM</td></tr>
						<tr><td>Style de rainage 2 largeurs</td></tr>
						<tr><td>Réglage profondeur de rainage 3 positions sur écran</td></tr>
						<tr><td>Nombre de rainages Maxi 20</td></tr>
						<tr><td>Précision ± 0,1 mm</td></tr>
						<tr><td>Système de pliage Multigraf Pro Knife TM</td></tr>
						<tr><td>Nombre de plis Maxi 2</td></tr>
						<tr><td>Longueur mini du pli 30 mm</td></tr>
						<tr><td>Longueur maxi du pli 500 mm</td></tr>
						<tr><td>Longueur réception documents pliés 900 mm</td></tr>
						<tr><td>Capacité bac documents rainés 120 mm</td></tr>
						<tr><td>Dimensions 1850 x 600 x 1320 mm</td></tr>
						<tr><td>Poids 168 kg</td></tr>
						<tr><td>Alimentation 220 V</td></tr>
					</tbody>
				</table>
			</div>
		</section>
		<?php
		} // end while
	} // end if
	?>
	</div>
	<div class="similar-products">
		<div class="row">
			<div class="small-12 columns"><h5>Produits similaires</h5></div>
			<div class="small-12 medium-6 large-3 columns similar">
				<section>
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/product/img.gif" />
					<h6>Touchline CP 375</h6>
					<div class="price">399,<sup>99</sup> €</div>
					<p>La touchline CP 375 raine et perfore</p>
				</section>
			</div>
			<div class="small-12 medium-6 large-3 columns similar">
				<section>
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/product/img.gif" />
					<h6>Touchline CP 375</h6>
					<div class="price">399,<sup>99</sup> €</div>
					<p>La touchline CP 375 raine et perfore</p>
				</section>
			</div>
			<div class="small-12 medium-6 large-3 columns similar">
				<section>
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/product/img.gif" />
					<h6>Touchline CP 375</h6>
					<div class="price">399,<sup>99</sup> €</div>
					<p>La touchline CP 375 raine et perfore</p>
				</section>
			</div>
			<div class="small-12 medium-6 large-3 columns similar">
				<section>
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/product/img.gif" />
					<h6>Touchline CP 375</h6>
					<div class="price">399,<sup>99</sup> €</div>
					<p>La touchline CP 375 raine et perfore</p>
				</section>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
