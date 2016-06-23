<?php

function validateForm($data, $fields = ['name', 'email', 'phone']) {
    $field = true;
    foreach ($fields as $item) {
        switch ($item) {
            case 'name':
                if (!isset($data['name']) || empty(trim($data['name']))) {
                    $field = 'name';
                }
                break;
            case 'email':
                if (!isset($data['email']) || !preg_match('/^[a-z0-9._+-]+@(?:[^.-]?[a-z0-9-]+[^-]?\.)+(?:[A-Z]{2,6})$/i', $data['email'])) {
                    $field = 'email';
                }
                break;
            case 'phone':
                if (!isset($data['phone']) || !preg_match('/\+7 \(\d{3}\) \d{3}-\d{4}/', $data['phone'])) {
                    $field = 'phone';
                }
                break;
        }
        if ($field !== true) {
            break;
        }
    }

    return $field;
}

function generateValidationKey() {
    $uu = uniqid(mt_rand(), true);
    $key = md5($uu . microtime()) . '_' . $uu;
    $_SESSION['csrf'] = $key;
    $_SESSION['rcount'] = 0;
    return $key;
}

function checkValidationKey($key) {
    return isset($_SESSION['csrf']) && $_SESSION['csrf'] === $key;
}

function sendMail($to, $subject, $message) {
    mail($to, $subject, $message);
}

function sendErrorLog($message) {
    mail(ADMIN_EMAIL, 'Error', $message);
}

function exceptionHandler($e) {
    $msg = "%s in %s (%s)";
    $msg = sprintf($msg, $e->getMessage(), $e->getFile(), $e->getLine());
    $stack[] = $msg;
    $traces = $e->getTrace();
    if ($traces) {
        foreach ($traces as $trace) {
            if (isset($trace['file'], $trace['line'])) {
                $stack[] = "in " . str_replace(dirname(__FILE__), '', $trace['file']) . ' (' . $trace['line'] . ')';
            }
        }
    }
    $msg = "\n" . implode("\n", $stack);
    sendErrorLog($msg);
}

function errorHandler($errno, $errstr, $errfile, $errline) {
    $msg = "%s in %s (%s)";
    $msg = sprintf($msg, $errstr, $errfile, $errline);
    $stack[] = $msg;
    $traces = debug_backtrace();
    if ($traces) {
        foreach ($traces as $trace) {
            if (isset($trace['file'], $trace['line'])) {
                $stack[] = "in " . str_replace(dirname(__FILE__), '', $trace['file']) . ' (' . $trace['line'] . ')';
            }
        }
    }
    $msg = "\n" . implode("\n", $stack);
    sendErrorLog($msg);
}
