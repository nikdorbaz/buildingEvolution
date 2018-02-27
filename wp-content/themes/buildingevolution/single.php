<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Building_Evolution
 */

get_header();?>

<?php
$category_id = get_field('project_category', $post->ID); 
$category_name = get_term($category_id);
$slider = get_field('project_images', $post->ID);
$images = explode(',', $slider);
$first_image = wp_get_attachment_url($images[0]);
?>

<main class='single-page page-service-single'>
	<div class="section single-section">
		<div class="container">
			<div class="col-md-5 services-items">
				<div class="wrap-content">
					<header class="section-header">
						<span class="section-header-title">Проекты / <?= $category_name->name?></span>
					</header>
					<div class="section-content">
						<h3><?= the_title()?></h3>
						<?php if( have_rows('short_descriptions') ): ?>
							<ul class="project-character">
							<?php while( have_rows('short_descriptions') ): the_row();?>
							
								<li><span><?= get_sub_field('name_short_description')?></span><?= get_sub_field('data_short_description')?></li>
						
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						
						<div class="project-description">
							<p><?= get_field('description', $post->ID)?></p>
						</div>
					</div>
					<div class="section-footer">
						<a href="projects-repair.html" class="btn">Все проекты</a>
					</div>
				</div>	
			</div>
			<div class="col-md-7">
				<div class="project-slider">
					<div class="main-image" style="background-image: url(<?= $first_image ?>"></div>
					<?php if ( count($images) > 1 ): ?>
					<div class="additional-images">
						<div class="images-outer-block">
							<?php foreach ( $images as $k=>$image ):?>
								<?php if ($k != 0 ): ?>
								<div class="image-item">
									<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
								</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
