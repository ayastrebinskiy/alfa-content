<?php

require_once 'functions.php';

$result = array(
    'error' => false,
    'field' => null,
    'text' => null
);

if (!isset($_POST['csrf']) || !checkValidationKey($_POST['csrf'])) {
    $result['error'] = true;
    $result['text'] = 'Некорректный запрос';
} elseif (isset($_SESSION['rcount']) && $_SESSION['rcount'] >= 10) {
    $result['error'] = true;
    $result['text'] = 'Превышено количество запросов';
} else {

    if (!isset($_POST['Client'])) {
        $result['error'] = true;
        $result['text'] = 'Заполните поля формы';
    } else {
        $data = $_POST['Client'];
        if (($field = validate($data)) !== true) {
            $result['error'] = true;
            $result['field'] = $field;
        } else {
            $message = formatMessage($data);
            $_SESSION['rcount'] = isset($_SESSION['rcount']) ? $_SESSION['rcount'] + 1 : 1;
            mail('anatoliy.yastrebinskiy@gmail.com', 'Alfa-content', $message);
        }
    }
}

echo json_encode($result);
exit(0);
