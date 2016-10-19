<!DOCTYPE html>
<html>
	<head>

		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width"/>
		<link href="/wp-content/themes/tkom/images/favicon.png" rel="icon" type="image/x-icon"/>

		<meta name="keywords" lang="ru" content=""/>
		<meta name="description" lang="ru" content=""/>

		<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
		
		<?php wp_head(); ?>

		<script src="/wp-content/themes/tkom/js/html5.js"></script><!-- Создание новых тегов в старых браузерах -->
		<script src="/wp-content/themes/tkom/js/jquery.min.js"></script><!-- jQuery -->


		<!-- start: UI-элементы -->
			<script src="/wp-content/themes/tkom/js/components/chosen.jquery.js"></script><!-- Стилизованные комбобоксы -->
			<script src="/wp-content/themes/tkom/js/components/balalayka.loader.js"></script><!-- Индикатор процесса -->
			<script src="/wp-content/themes/tkom/js/components/balalayka.popup.js"></script><!-- Модальные окна -->
		<!-- end: UI-элементы -->


		<script src="/wp-content/themes/tkom/js/app.js"></script><!-- Приложение -->

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
<div class="m_sidebar" data-role="mobile_sidebar">
	<div data-role="auth">
		<nav class="m_sidebar__menu">
			<div class="m_sidebar__menu__search">
				<input type="text" placeholder="Поиск" class="bal_input dark"/>
			</div>
			<a href="#" class="m_sidebar__menu__item" data-role="for_phone">Поехали!</a>
			<a href="#" class="m_sidebar__menu__item" data-role="for_phone">Энциклопедия</a>
			<div class="bal_line" data-role="for_phone"></div>
			<a href="#" class="m_sidebar__menu__item home">Моя страница</a>
			<a href="#" class="m_sidebar__menu__item newspaper">Новости</a>
			<a href="#" class="m_sidebar__menu__item envelope">Сообщения</a>
			<a href="#" class="m_sidebar__menu__item person">Товарищи</a>
			<a href="#" class="m_sidebar__menu__item hammer">Труд</a>
			<a href="#" class="m_sidebar__menu__item heart">Здоровье</a>
			<a href="#" class="m_sidebar__menu__item speaker">Сообщества</a>
			<a href="#" class="m_sidebar__menu__item play">Медиафайлы</a>
			<a href="#" class="m_sidebar__menu__item book">Знания</a>
			<div class="bal_line"></div>
			<a href="#" class="m_sidebar__menu__item trophy">Награды</a>
			<a href="#" class="m_sidebar__menu__item baloon_chart">Волеизъявление</a>
			<a href="#" class="m_sidebar__menu__item document">Документы</a>
			<a href="#" class="m_sidebar__menu__item bookmark">Закладки</a>
			<a href="#" class="m_sidebar__menu__item gamepad">Игры</a>
			<a href="#" class="m_sidebar__menu__item billboard">Реклама</a>
			<a href="#" class="m_sidebar__menu__item question">Помощь</a>
		</nav>
	</div>
</div>


<!-- Общий контейнер
=========================================================== -->
<div class="l_base">

	<!-- Шапка
	=========================================================== -->
	<header class="l_header">
		<div class="g_inner">
			<a class="m_menu_trigger" data-role="menu_trigger"><span></span></a>
			<a href="" class="l_header__logo">Техноком</a>
			<div class="l_header__search">
				<input type="text" placeholder="Поиск" class="bal_input dark"/>
			</div>
			<div class="l_header__right">
				<a href="#">Поехали!</a>
				<a href="#">Энциклопедия</a>
			</div>
		</div>
	</header>
	
	<!-- Контент
	=========================================================== -->
	<div class="l_content">
		<div class="g_inner">
			<div class="l_content__main">

				<div class="g_grid">

					<aside class="g_grid__sidebar" data-role="desktop_menu">
						<nav class="menu">
							<a href="#" class="menu__item home">Моя страница</a>
							<a href="#" class="menu__item newspaper">Новости</a>
							<a href="#" class="menu__item envelope">Сообщения</a>
							<a href="#" class="menu__item person">Товарищи</a>
							<a href="#" class="menu__item hammer">Труд</a>
							<a href="#" class="menu__item heart">Здоровье</a>
							<a href="#" class="menu__item speaker">Сообщества</a>
							<a href="#" class="menu__item play">Медиафайлы</a>
							<a href="#" class="menu__item book">Знания</a>
							<div class="bal_line"></div>
							<a href="#" class="menu__item trophy">Награды</a>
							<a href="#" class="menu__item baloon_chart">Волеизъявление</a>
							<a href="#" class="menu__item document">Документы</a>
							<a href="#" class="menu__item bookmark">Закладки</a>
							<a href="#" class="menu__item gamepad">Игры</a>
							<a href="#" class="menu__item billboard">Реклама</a>
							<a href="#" class="menu__item question">Помощь</a>
						</nav>
					</aside>

					<div class="g_grid__content">