<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Building_Evolution
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="main-header">
		<div class="container">
			<div class="header">
				<div class="row">
					<div class="col-md-4">
						<a href='/'>
							<img class="header-logo" src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt='Building Evolution'>
						</a>
					</div>
					<div class="col-md-8 text-right">
						<div class='header-menu-wrapper'>
							<ul class="header-menu" id="menu">
								<li class="header-menu-item active">
									<a href="/" class='header-menu-href'>
										<span class='header-menu-border'>Главная</span>
									</a>
								</li>
								<li class="header-menu-item">
									<a href="about" class='header-menu-href'>
										<span class='header-menu-border'>О нас</span>
									</a>
								</li>
								<li class="header-menu-item">
									<p class='header-menu-href'>
										<span class='header-menu-border'>Услуги</span>
									</p>
									<ul class='header-submenu'>
										<li class='header-submenu-item'>
											<a href='services-building.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons-2.png">
												</div>
												<span class='header-submenu-text'>Строительство</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='services-repair.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons_walls.png">
												</div>
												<span class='header-submenu-text'>Ремонт</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='services-network.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons-3.png">
												</div>
												<span class='header-submenu-text'>Инженерные сети</span>
											</a>
										</li>
									</ul>
								</li>
								<li class="header-menu-item">
									<p class='header-menu-href'>
										<span class='header-menu-border'>Проекты</span>
									</p>
									<ul class='header-submenu'>
										<li class='header-submenu-item'>
											<a href='projects-building.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons-2.png">
												</div>
												<span class='header-submenu-text'>Строительство</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='projects-repair.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons_walls.png">
												</div>
												<span class='header-submenu-text'>Ремонт</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='projects-network.html' class='header-submenu-href'>
												<div class='header-submenu-icon'>
													<img src="assets/images/icons-3.png">
												</div>
												<span class='header-submenu-text'>Инженерные сети</span>
											</a>
										</li>
									</ul>
								</li>
								<li class="header-menu-item">
									<p class='header-menu-href'>
										<span class='header-menu-border'>Наши компании</span>
									</p>
									<ul class='header-submenu'>
										<li class='header-submenu-item'>
											<a href='companies-security.html' class='header-submenu-href'>
												<span class='header-submenu-title'>Security Evolution</span>
												<span class='header-submenu-desc'>Охранные системы</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='companies-design.html' class='header-submenu-href'>
												<span class='header-submenu-title'>Design Evolution</span>
												<span class='header-submenu-desc'>дизайн</span>
											</a>
										</li>
										<li class='header-submenu-item'>
											<a href='companies-climate.html' class='header-submenu-href'>
												<span class='header-submenu-title'>Climate evolution</span>
												<span class='header-submenu-desc'>Климатические системы</span>
											</a>
										</li>
									</ul>
								</li>
								<li class="header-menu-item">
									<a href="contacts.html" class='header-menu-href'>
										<span class='header-menu-border'>Контакты</span>
									</a>
								</li>
								<? if ( ! is_active_sidebar( 'sidebar-1' ) ): ?>
									<? return;?>
								<? else: ?>
									<li class="header-menu-item item-lang">
										<p class='header-menu-href'>
											<span class='header-menu-border'>РУС</span>
										</p>
										<ul class='header-submenu submenu-lang'>
											<li class='header-submenu-item'>
												<a href='#' class='header-submenu-text'>ENG</a>
											</li>
										</ul>
									</li>
								<? endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</header>
	
	<? get_sidebar(); ?>

	<div id="content" class="site-content">
