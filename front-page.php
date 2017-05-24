<!DOCTYPE html>
<html class="no_margin_top">
	<head>

		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width"/>
		<link href="/wp-content/themes/index/images/favicon.png" rel="icon" type="image/x-icon"/>

		<meta name="keywords" lang="ru" content=""/>
		<meta name="description" lang="ru" content=""/>

		<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
		
		<?php wp_head(); ?>


		<script src="/wp-content/themes/index/js/app.js"></script><!-- Приложение -->

	</head>
<body <?php body_class(); ?>>


<!-- Индикатор загрузки
=========================================================== -->
<div class="bal_loader" data-bal-role="page">
	<div class="bal_loader__indicator"></div>
</div>


<!-- Модальные окна
=========================================================== -->
<div class="bal_popups_bg"></div>

<div class="bal_popup" id="alert">
	<button class="bal_popup__cross" data-bal-action="close" title="Закрыть"></button>
	<div class="bal_title h2"></div>
	<p class="bal_text"></p>
</div>


<!-- Мобильное меню
=========================================================== -->
<div class="m_sidebar" data-role="mobile_sidebar" id="mobile_sidebar">
	<div data-role="auth">
		<nav class="m_sidebar__menu">
			<?php dynamic_sidebar( 'menu-mobile' ); ?>
		</nav>
	</div>
</div>


<!-- Общий контейнер
=========================================================== -->
<div class="l_base landing">

	<!-- Шапка
	=========================================================== -->
	<header class="l_header">
		<div class="g_inner">
			<a class="m_menu_trigger" data-role="menu_trigger" id="menu_trigger"><span></span></a>
			<a href="/" class="l_header__logo">
				<img src="/wp-content/themes/index/images/logo.png" alt="Техноком"/>
			</a>
			<div class="l_header__search">
				<?php dynamic_sidebar( 'menu-search' ); ?>
			</div>
			<div class="l_header__right">
				<?php dynamic_sidebar( 'menu-top' ); ?>
				<?php dynamic_sidebar( 'menu-lingvo' ); ?>
			</div>
		</div>
	</header>
	
	<!-- Контент
	=========================================================== -->
	<div class="l_content">
		<div class="g_inner">
			<div class="l_content__main">
			<?php dynamic_sidebar( 'front-page' ); ?>
			</div>
		</div>
	</div>
	
	<!-- Футер
	=========================================================== -->
	<footer class="l_footer">
		
	</footer>
	
</div>


<?php get_footer(); ?>