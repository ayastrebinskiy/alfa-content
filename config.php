<?php

session_start();

require_once 'functions.php';
require_once 'result.php';

define('EMAIL_INFO_TARIFF', $_SERVER['HTTP_HOST'] === 'dev.alfa-content.ru' ? 'anatoliy.yastrebinskiy@gmail.com' : 'info@alfa-content.ru');
define('ADMIN_EMAIL', 'anatoliy.yastrebinskiy@gmail.com');

set_exception_handler('exceptionHandler');
set_error_handler('errorHandler');

