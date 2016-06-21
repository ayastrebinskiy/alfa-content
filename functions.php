<?php

session_start();

function validate($data){
    $field = true;
    if(!isset($data['name']) || empty(trim($data['name']))){
        $field = 'name';
    } elseif(!isset($data['email']) || !preg_match('/^[a-z0-9._+-]+@(?:[^.-]?[a-z0-9-]+[^-]?\.)+(?:[A-Z]{2,6})$/i', $data['email'])){
        $field = 'email';
    } elseif(!isset($data['phone']) || !preg_match('/\+7 \(\d{3}\) \d{3}-\d{4}/', $data['phone'])){
        $field = 'phone';
    }

    return $field;
}

function formatMessage($data){
    $message = sprintf("Наименование тарифа: %s\nИмя:%s\nE-mail:%s\nТелефон:%s\nЭкран:%s", $data['tariff'], $data['name'], $data['email'], $data['phone'],$data['screen']);
    return $message;
}

function generateValidationKey(){
    $uu = uniqid(mt_rand(), true);
    $key = md5($uu.microtime()).'_'.$uu;
    $_SESSION['csrf'] = $key;
    $_SESSION['rcount'] = 0;
    return $key;
}

function checkValidationKey($key){
    return isset($_SESSION['csrf']) && $_SESSION['csrf'] === $key;
}

