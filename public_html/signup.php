<?php 
$title="Регистрация"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

?>

<div class="container mt-4">
		<div class="row">
			<div class="col">
	   <!-- Форма регистрации -->
		<h2>Регистрация</h2>
		<form action="signup.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="email" class="form-control" name="email" id="email" placeholder="Введите Email"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required><br>
			<input type="text" class="form-control" name="family" id="family" placeholder="Введите фамилию" required><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<input type="password" class="form-control" name="password_2" id="password_2" placeholder="Повторите пароль"><br>
			<button class="btn btn-success" name="do_signup" type="submit">Зарегистрироваться</button>
		</form>
		<br>
		<p>Если вы зарегистрированы, тогда нажмите <a href="login.php" style="color: blue">здесь</a>.</p>
		<p>Вернуться на <a href="index.php" style="color: blue">главную</a>.</p>
			</div>
		</div>
	</div>
<?php
		session_start();
$data = $_POST;

if(isset($data['do_signup'])) {
	$errors = array();

	if(trim($data['login']) == '') {

		$errors[] = "Введите логин!";
	}

	if(trim($data['email']) == '') {

		$errors[] = "Введите Email";
	}


	if(trim($data['name']) == '') {

		$errors[] = "Введите Имя";
	}

	if(trim($data['family']) == '') {

		$errors[] = "Введите фамилию";
	}

	if($data['password'] == '') {

		$errors[] = "Введите пароль";
	}

	if($data['password_2'] != $data['password']) {

		$errors[] = "Повторный пароль введен не верно!";
	}
	if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

	    $errors[] = "Недопустимая длина логина";

    }

    if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 50){
	    
	    $errors[] = "Недопустимая длина имени";

    }

    if (mb_strlen($data['family']) < 5 || mb_strlen($data['family']) > 50){
	    
	    $errors[] = "Недопустимая длина фамилии";

    }

    if (mb_strlen($data['password']) < 2 || mb_strlen($data['password']) > 8){
	
	    $errors[] = "Недопустимая длина пароля (от 2 до 8 символов)";

    }

    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

	    $errors[] = 'Неверно введен е-mail';
    
    }

	if(R::count('users', "login = ?", array($data['login'])) > 0) {

		$errors[] = "Пользователь с таким логином существует!";
	}

	if(R::count('users', "email = ?", array($data['email'])) > 0) {

		$errors[] = "Пользователь с таким Email существует!";
	}


	if(empty($errors)) {
	    

		$user = R::dispense('users');

		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->name = $data['name'];
		$user->family = $data['family'];

		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

		R::store($user);
        echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="login.php">авторизоваться</a>.</div><hr>';

	} else {
                
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}
?>