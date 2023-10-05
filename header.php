<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>
		<? $APPLICATION->ShowTitle(); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/swiper-bundle.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/swiper-bundle.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/app.js');


	Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
				integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
				crossorigin="anonymous" referrerpolicy="no-referrer" />');
	Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">');
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">');
	?>

	<? $APPLICATION->ShowHead(); ?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	<div class="wrapper">
		<!-- Header-->
		<header class="header">
			<div class="container ">
				<div class="header__body">
					<div class="header__hamburger-logo-wrapper">
						<div class="header__hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<a class="header__logo">
							<svg xmlns="http://www.w3.org/2000/svg" height="4.8em"
								viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
								<path
									d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z" />
							</svg>
						</a>
					</div>
					<div class="header__menu menu">
						<nav class="menu__body">
							<ul class="menu__list">
								<li class="menu__item"><a href="" class="menu__link">HOME</a></li>
								<li class="menu__item"><a href="" class="menu__link">FEATURES</a></li>
								<li class="menu__item"><a href="" class="menu__link">SUPPORT</a></li>
								<li class="menu__item"><a href="" class="menu__link">CONTACT US</a></li>
							</ul>
						</nav>
					</div>
					<div class="header__icons">
						<a href="#" class="header__icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="2em"
								viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
								<path
									d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
							</svg>
						</a>
						<a href="#" class="header__icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="2em"
								viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
								<path
									d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
							</svg>
						</a>
						<a href="#" class="header__icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="2em"
								viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
								<path
									d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</header>