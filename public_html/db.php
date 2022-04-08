<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=lolavo41_f',
        'lolavo41_f', 'k&KyDmc0' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>