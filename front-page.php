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
			<a href="#" class="m_sidebar__menu__item" data-role="for_phone">Поехали!</a>
			<a href="#" class="m_sidebar__menu__item" data-role="for_phone">Сообщества</a>
			<a href="#" class="m_sidebar__menu__item" data-role="for_phone">Помощь</a>
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
			<a class="m_menu_trigger" data-role="menu_trigger"><span></span></a>
			<div class="l_header__logo">Техноком</div>
			<div class="l_header__right">
				<a href="#">Поехали!</a>
				<a href="#">Сообщества</a>
				<a href="#">Помощь</a>
			</div>
		</div>
	</header>
	
	<!-- Контент
	=========================================================== -->
	<div class="l_content">
		<div class="g_inner">
			<div class="l_content__main">

				<h1 class="bal_title h1 white">Умная соцсеть, с помощью<br/>которой вы достигнете большего</h1>
				<h2 class="bal_title h2 white">Общайтесь, учитесь, учите, организуйтесь для совместной работы или задач</h2>
				<h2 class="bal_title h2 white like_list">
					<a href="#">Выбирайте</a> из 2 304 сообществ<br/>
					<a href="#">Присоединяйтесь</a> к 4 721 проекту<br/>
					<a href="#">Общайтесь</a> с 53 412 единомышленниками
				</h2>

			</div>
		</div>
	</div>
	
	<!-- Футер
	=========================================================== -->
	<footer class="l_footer">
		
	</footer>
	
</div>


</body>
</html>