<?php

session_start();

require_once 'functions.php';
require_once 'result.php';

define('MANAGER_EMAIL', 'info@alfa-content.ru');
define('ADMIN_EMAIL', 'anatoliy.yastrebinskiy@gmail.com');
define('EMAIL_INFO_TARIFF', $_SERVER['HTTP_HOST'] === 'dev.alfa-content.ru' ? ADMIN_EMAIL : MANAGER_EMAIL);



set_exception_handler('exceptionHandler');
set_error_handler('errorHandler');

