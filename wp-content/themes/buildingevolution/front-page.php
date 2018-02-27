<?php
/**
 * The main page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Building_Evolution
 */

get_header(); ?>

	<div id="primary" class="content-area">
<main>
	<div id="fullpage">
		<div class="section active vertical-scrolling" id="section1" data-name="Главная">
			<div class="container">
				<div class="col-md-5">
					<div class="wrap-content">
						<header class="section-header">
							<span class="section-header-title"><?= get_field('header_section_1')?></span>
						</header>
						<div class="section-content">
							<h2 class="crawl-title"><?= get_field('text_section_1')?></h2>
						</div>
						<footer class="section-footer">
							<span class="section-footer-text"><?= get_field('footer_section_1')?></span>
						</footer>
					</div>	
				</div>	
				<div class="col-md-7 text-right">
					<div class="owl-carousel be-owl-theme owl-hover">
						<? $slider = get_field('slider');
						$images = explode(',', $slider);
						foreach ( $images as $image ):?>
							<div data-dot="<?= wp_get_attachment_url($image);?>" class="item">
								<img src="<?= wp_get_attachment_url($image, 'full')?>" width="88%">
							</div>	
						<? endforeach;?>
					</div>
				</div>
			</div>	
		</div>
		<div class="section vertical-scrolling" id="section2" data-name="О компании">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title"><?= get_field('header_section_2')?></span>
							</header>
							<footer class="section-footer">
								<?php if( have_rows('advantages') ): ?>
									<ul class="chaos-list">
								
									<?php while( have_rows('advantages') ): the_row();?>
								
										<li class="anim-class"><?= get_sub_field('advantage')?></li>
								
									<?php endwhile; ?>
								
									</ul>
								
								<?php endif; ?>
							</footer>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="outher-block">
							<h2 class="title-decor"><?= get_field('about_company_title')?></h2>
							<div class="about-us-description">
								<?= get_field('about_company_description')?>
							</div>
							<a href="about.html" class="btn">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section vertical-scrolling" id="section3" data-name="Офис">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title"><?= get_field('header_section_3')?></span>
							</header>	
						</div>	
					</div>	
					<div class="col-md-9 text-right">
						<video id="my-video" class="video-js" controls preload="auto" poster="" data-setup="{}" width="725px" height="406px">
							<source src="<?= get_template_directory_uri()?>/assets/video/video.mp4" type='video/mp4'>
						</video>
					</div>
				</div>
			</div>
		</div>
		<div class="section horizontal-scrolling slides-right" id="section4" data-name="Услуги" >
			<div class="slide active first-slide" style="background-image: url(<?= get_field('service_image')?>)" data-anchor="firstSlide" data-name="Услуги" data-firts="true">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="wrap-content">
								<header class="section-header">
									<span class="section-header-title"><?= get_field('header_section_4')?></span>
								</header>
								<div class="section-content">
									<h2 class="fs-34"><?= get_field('description_title_4')?></h2>
									<p class="about-us-description"><?= get_field('description_section_4')?></p>
								</div>
							</div>	
						</div>
						<div class="col-md-7">
							<div class="advantages">
								<div class="item-advantage">
									<a href='services-repair.html'>
										<figure>
											<img src="<?= get_template_directory_uri()?>/assets/images/icons-2.png">
											<figcaption>Ремонтные работы</figcaption>
										</figure>
									</a>
								</div>
								<div class="item-advantage">
									<a href='services-building.html'>
										<figure>
											<img src="<?= get_template_directory_uri()?>/assets/images/icons_walls.png">
											<figcaption>Строительство</figcaption>
										</figure>
									</a>
								</div>
								<div class="item-advantage">
									<a href='services-network.html'>
										<figure>
											<img src="<?= get_template_directory_uri()?>/assets/images/icons-3.png">
											<figcaption>Инженерные сети</figcaption>
										</figure>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide horizontal-scrolling" data-name="Строительство">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Услуги / Строительство</span>
							</header>
							<div class="section-footer">
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_build_1')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_build_1')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_build_2')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_build_2')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
							</div>
						</div>	
					</div>	
					<div class="col-md-7 text-right">
						<img src="<?= get_field('image_building')?>" width="87%;">
					</div>
				</div>
			</div>
			<div class="slide horizontal-scrolling"  data-name="Ремонт">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Услуги / Ремонт</span>
							</header>
							<div class="section-footer">
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_rep_1')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_rep_1')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_rep_2')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_rep_2')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
							</div>
						</div>	
					</div>	
					<div class="col-md-7 text-right">
						<img src="<?= get_field('image_repairs')?>" width="87%;">
					</div>
				</div>
			</div>
			<div class="slide horizontal-scrolling"  data-name="Инженерные сети">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Услуги / инженерные сети</span>
							</header>
							<div class="section-footer services-item-3">
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_eng_1')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_eng_1')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_eng_2')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_eng_2')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
								<div class="services-item">
									<a href="services-single.html">
										<h3 class='service-title'><?= get_field('name_service_eng_3')?></h3>
									</a>
									<div class="short-description-service">
										<?= get_field('desc_service_eng_3')?>
									</div>
									<a class="services-link" href="services-single.html">
										<img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'>
									</a>
								</div>
							</div>
						</div>	
					</div>	
					<div class="col-md-7 text-right">
						<img src="<?= get_field('image_eng')?>" width="87%;">
					</div>
				</div>
			</div>
		</div>
		<div class="section horizontal-scrolling slides-left" id="section5" data-name="Проeкты">
			<div class="slide">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Проекты / Инженерные сети</span>
							</header>
							<div class="section-content">
								<h3>Пятиэтажный дом на ул. Толстого</h3>
								<ul class="project-character">
									<li><span>Площадь</span>25 000 м<sup>2</sup></li>
									<li><span>Когда реализован</span>2007</li>
									<li><span>Срок реализации</span>2007</li>
									<li><span>Вид работ</span>Строительство</li>
								</ul>
								<div class="project-description">
									<p>Архитектуру здания разработал наш деловой партнер - компания EVOdesign. Мы проводим все этапы строительных работа. На объекте используется тяжелая техника и гидравлический кран.</p>
									<p>Фундамент здания - монолитная плита с опорными столбами под пилоны.</p>
								</div>
							</div>
							<div class="section-footer">
								<a href="projects-network.html" class="btn">Все проекты</a>
							</div>
						</div>	
					</div>	
					<div class="col-md-7">
						<div class="project-slider">
							<div class="main-image" style="background-image: url(<?= get_template_directory_uri()?>/assets/images/section-1.png)"></div>
							<div class="additional-images">
								<div class="images-outer-block">
									<div class="image-item">
										<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
									</div>
									<div class="image-item">
										<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
									</div>
									<div class="image-item">
										<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
									</div>
									<div class="image-item">
										<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
									</div>
									<div class="image-item">
										<img src="<?= get_template_directory_uri()?>/assets/images/section-1.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Услуги / Ремонт</span>
							</header>
							<div class="section-content">
								<h3>Пятиэтажный дом на ул. Толстого</h3>
								<ul class="project-character">
									<li><span>Площадь</span>25 000 м<sup>2</sup></li>
									<li><span>Когда реализован</span>2007</li>
									<li><span>Срок реализации</span>2007</li>
									<li><span>Вид работ</span>Строительство</li>
								</ul>
								<div class="project-description">
									<p>Архитектуру здания разработал наш деловой партнер - компания EVOdesign. Мы проводим все этапы строительных работа. На объекте используется тяжелая техника и гидравлический кран.</p>
									<p>Фундамент здания - монолитная плита с опорными столбами под пилоны.</p>
								</div>
							</div>
							<div class="section-footer">
								<a href="projects-repair.html" class="btn">Все проекты</a>
							</div>
						</div>	
					</div>	
					<div class="col-md-7 text-right">
						<img src="<?= get_template_directory_uri()?>/assets/images/slide2.png" width="87%;">
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="container">
					<div class="col-md-5 services-items">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title">Услуги / Строительство</span>
							</header>
							<div class="section-content">
								<h3>Пятиэтажный дом на ул. Толстого</h3>
								<ul class="project-character">
									<li><span>Площадь</span>25 000 м<sup>2</sup></li>
									<li><span>Когда реализован</span>2007</li>
									<li><span>Срок реализации</span>2007</li>
									<li><span>Вид работ</span>Строительство</li>
								</ul>
								<div class="project-description">
									<p>Архитектуру здания разработал наш деловой партнер - компания EVOdesign. Мы проводим все этапы строительных работа. На объекте используется тяжелая техника и гидравлический кран.</p>
									<p>Фундамент здания - монолитная плита с опорными столбами под пилоны.</p>
								</div>
							</div>
							<div class="section-footer">
								<a href="projects-building.html" class="btn">Все проекты</a>
							</div>
						</div>	
					</div>	
					<div class="col-md-7 text-right">
						<img src="<?= get_template_directory_uri()?>/assets/images/slide4.png" width="87%;">
					</div>
				</div>
			</div>
			<div class="slide active first-slide-projects" data-firts="true">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="wrap-content">
								<header class="section-header">
									<span class="section-header-title">Проекты</span>
								</header>
								<div class="section-content">
									<h2 class="fs-34">Галерея проектов и этапы выполнения</h2>
									<p class="about-us-description">Мы можем воплотить в жизнь самые нестандартные задачи, которые нам ставит Заказчик, будь то мангал, водопад, альпийская горка или что-либо еще.</p>
								</div>
							</div>	
						</div>
						<div class="col-md-7">
							<div class="advantages">
								<div class="item-advantage">
									<figure>
										<img src="<?= get_template_directory_uri()?>/assets/images/icons-2.png">
										<figcaption>Ремонтные работы</figcaption>
									</figure>
								</div>
								<div class="item-advantage">
									<figure>
										<img src="<?= get_template_directory_uri()?>/assets/images/icons_walls.png">
										<figcaption>Строительство</figcaption>
									</figure>
								</div>
								<div class="item-advantage">
									<figure>
										<img src="<?= get_template_directory_uri()?>/assets/images/icons-3.png">
										<figcaption>Инженерные сети</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section vertical-scrolling" id="section6" data-name="Наши компании">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="section-header">
							<span class="section-header-title"><?= get_field('header_section_6')?></span>
						</header>	
						<div class="section-content">
							<div class="row our-companies">
								<?php if( have_rows('our_companies') ): ?>
									<? $i = 1 ?>
									<?php while( have_rows('our_companies') ): the_row();?>
									<div class="companies-item col-md-4">
										<div class="companies-header"><span class="companies-number">0<?= $i++?></span><span class="companies-title"><?= get_sub_field('title_company')?></span></div>
										<div class="companies-logo">
											<span class="bg-company"><?= get_sub_field('shortname_company')?></span>
											<img src="<?= get_sub_field('image_company')?>">
											<a class="services-link companies-link" href="#"><img src='<?= get_template_directory_uri()?>/assets/images/arrowright.png'></a>
										</div>
									</div>
								
									<?php endwhile; ?>
								
								<?php endif; ?>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="section vertical-scrolling" id="section7" data-name="Контакты">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-content">
							<header class="section-header">
								<span class="section-header-title"><?= get_field('header_section_7')?></span>
							</header>
							<div class="section-content">
								<h2 class="contact-title">Мы способны противостоять любым трудностям, мы не боимся осваивать новые вершины</h2>
							</div>
							<footer class="section-footer">
								<a href="#top" class="to_top">Наверх</a>
							</footer>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="outher-block footer-outher">
							<ul class="footer-ul">
								<li><span>Адрес</span>Киев, ул. Кадетский Гай, 6,</li>
								<li><span>Гл. офис</span>(044) 229-09-13</li>
								<li><span>Почта</span>office@buildingevolution.com.ua</li>
							</ul>
							<ul class="footer-ul">
								<li><span>Отдел продаж</span>(044) 229-09-13</li>
								<li><span>Отдел закупок</span>(097) 836-65-08</li>
								<li><span>Отдел маркетинга</span>(096) 669-73-83</li>
							</ul>
							<a href="#" class="btn">Оставить заявку</a>
							<div class="copyright">
								<p><span class="white">Building Evolution</span> 2017 / Все права защищены</p>
								<p style="cursor: pointer">Powered by <span class="white">Prospect-line</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
