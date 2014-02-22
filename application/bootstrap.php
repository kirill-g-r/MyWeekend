<?php

// подключаем файлы ядра

require_once 'core/authorization‎.php';	//?
#require_once 'core/statusbar‎.php';	// Статус бар + инфо авторизован ли пользователь
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
echo $user->username;

/*
 Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
> аутентификацию
> кеширование
> работу с формами
> абстракции для доступа к данным
> ORM
> Unit тестирование
> Benchmarking
> Работу с изображениями
> Backup
> и др.
*/

require_once 'core/route.php';
Route::start();