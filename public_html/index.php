<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="assets/img/icon.png"type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="button.js"></script>
	<?php
		$title="Главная страница"; // название формы
		require __DIR__ . '/header.php'; // подключаем шапку проекта
		require "db.php"; // подключаем файл для соединения с БД
	?>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title><?php echo $title; ?></title>
    <style>
        @font-face {
            font-family: "GardensC";
            src: url("fonts/GardensC.otf");
        }
		h1{font-family: "GardensC"}
    </style>
</head>	

<body>

	<section class="panel" id="first-page">
		<header class="d-flex justify-content-between align-items-end container">
			<div class="contact">
				<div class="item d-flex justify-content-center align-items-center mb-2">
					<img src="assets/img/address.png" alt="address">
					<p class="text-upper" style="border: 3px solid #fff; padding: 10px;">Вяземский</p>
				</div>

				<div class="item d-flex justify-content-center align-items-center">
					<img src="assets/img/phone.png" alt="phone">
					<p class="text-upper" style="border: 3px solid #fff; padding: 10px;">+7 924 919 57 44</p>
				</div>
			</div>
		</header>
		<div class="container d-flex flex-column align-items-center justify-content-center content"
			 style="margin-top: 75px;">
			<ul class="nav">
				<li class="text-upper"><a href="#plus">Преимущества</a></li>
				<li class="text-upper"><a href="#advantages">Услуги</a></li>
				<li class="text-upper"><a href="#sub">Вход/Регистрация</a></li>
			</ul>
			<h1 class="site-name text-upper" style="margin-top: 40px; padding: 10px;">ДВКЦ</h1>
			<a class="btn btn-white-big text-upper" style="margin-top: 25px" href="#catalog">Каталог</a>
		</div>
		<p></p>
		<p></p>
	</section>
	
	<div class="container mt-4">
		<center>
			<h4>Добро пожаловать на наш сайт!</h4>
		</center>
	</div>
	<!-- Если авторизован выведет приветствие -->
	<div class="namee" style="text-align: center;">
	<?php 
	session_start();
	if(isset($_SESSION['logged_user'])) : ?>
		Привет, <?php echo $_SESSION['logged_user']->name; ?>!</br>

	<!-- Пользователь может нажать выйти для выхода из системы -->
		<a href="logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
	<?php else : ?>
	<?php endif; ?>
	</div>
	<!-- Block Plus -->
	
	<section class="panel" id="plus" style=" padding-top: 200px;">
		<h1 class="section-title text-upper" style="color:black;">
			Преимущества
		</h1>
		<div class="d-flex justify-content-between">
			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
					<h4>Долгое время работы</h4>
					<img src="assets/img/advantages/1.png" alt="advantages" style="width: 5rem;" class="align-right">
				</div>
				<p class="my-5">
					Компания зарегистрирована <b><u>8 лет</u></b> назад,<br> что говорит о стабильной деятельности и поднадзорности государственным органам
				</p>
			</div>
			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
					<h4>
						Добросовестные поставщики
					</h4>
					<img src="assets/img/advantages/4.png" alt="advantages" style="width: 5rem;" class="align-right">
				</div>
				<p class="my-5">По данным ФАС, не входит в реестр недобросовестных поставщиков</p>
			</div>
			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
					<h4>
						Прибыль в прошлом отчетном периоде
					</h4>
					<img src="assets/img/advantages/3.png" alt="advantages" style="width: 5rem;" class="align-right">
				</div>
				<p class="my-5">
					По данным ФНС, в прошлом отчетном периоде<br>
					чистая прибыль компании составила <b><u>12,4 млн руб</u></b>.
				</p>
			</div>
		</div>
	</section>

	<!-- #Block Plus -->

	<section class="panel" id="advantages" style=" padding-top: 150px;">
		<h1 class="section-title text-upper" style="color:black;">Услуги</h1>

		<div class="d-flex justify-content-between">

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
					Лесозаготовка
				</h4>
					<img src="assets/img/tree.png" style="width:5 rem;" alt="" class="align-right">
				</div>
				
			</div>

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
					Распиловка и строгание древесины
				</h4>
					<img src="assets/img/factory.png" style="width: 5 rem;" alt="" class="align-right">
				</div>
			</div>

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
					Торговля древесным сырьем и необработанными лесоматериалами
				</h4>
					<img src="assets/img/sale.png" style="width: 5 rem;" alt="" class="align-right">
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-between" style="padding-top: 100px">

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
					Добыча глины и каолина
				</h4>
					<img src="assets/img/clay.png" style="width:5 rem;" alt="" class="align-right">
				</div>
				
			</div>

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
						Производство сборных паркетных покрытий
				</h4>
					<img src="assets/img/parquet.png" style="width: 5 rem;" alt="" class="align-right">
				</div>
			</div>

			<div class="bg-white position-relative p-4 rounded" style="width: 350px;">
				<div class="d-flex">
				<h4>
					Торговля пиломатериалами
				</h4>
					<img src="assets/img/lumber.png" style="width: 5 rem;" alt="" class="align-right">
				</div>
			</div>
			
		</div>
	</section>

	<section class="panel" id="sub">
		<div class="container h-100 d-flex justify-content-center align-items-center flex-column">
			<h1 class="section-title text-upper" style="color: #fff">Вход/Регистрация</h1>
			<form class="w-50 mt-5 d-flex flex-column align-items-center">
				<div id="auth_block">
 
                <div id="link_register" class="btn btn-white-big text-upper mt-5">
                    <a href="login.php">Вход</a>
                </div>
 
                <div id="link_auth" class="btn btn-white-big text-upper mt-5">
                    <a href="signup.php">Регистрация</a>
                </div>
 
            </div>
			</form>
		</div>
	</section>
	<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>