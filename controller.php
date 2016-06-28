<?php

class Controller {

    public function run($action = 'index') {
        $method = "action$action";
        if (!method_exists($this, $method)) {
            throw new Exception("Метод не найден");
        }

        return $this->$method();
    }

    public function actionIndex() {
        require 'views/main.php';
    }

    public function actionSendTariff() {
        $result = new Result();

        $mail_to = EMAIL_INFO_TARIFF;

        if (!isset($_POST['csrf']) || !checkValidationKey($_POST['csrf'])) {
            $result->error = true;
            $result->text = 'Некорректный запрос';
        } elseif (isset($_SESSION['rcount']) && $_SESSION['rcount'] >= 10) {
            $result->error = true;
            $result->text = 'Превышено количество запросов';
        } else {

            if (!isset($_POST['Client'])) {
                $result->error = true;
                $result->text = 'Заполните поля формы';
            } else {
                $data = $_POST['Client'];
                if (($field = validateForm($data)) !== true) {
                    $result->error = true;
                    $result->field = $field;
                } else {
                    $message = sprintf("Наименование тарифа: %s\nИмя:%s\nE-mail:%s\nТелефон:%s\nЭкран:%s", $data['tariff'], $data['name'], $data['email'], $data['phone'], $data['screen']);
                    $_SESSION['rcount'] = isset($_SESSION['rcount']) ? $_SESSION['rcount'] + 1 : 1;
                    sendMail($mail_to, 'Alfa-content', $message);
                }
            }
        }

        return $result->json();
    }

    public function actionSendCase() {
        $result = new Result();
        if (!isset($_POST['csrf']) || !checkValidationKey($_POST['csrf'])) {
            $result->error = true;
            $result->text = 'Некорректный запрос';
        } else {

            if (!isset($_POST['Client'])) {
                $result->error = true;
                $result->text = 'Заполните поля формы';
            } else {
                $data = $_POST['Client'];
                if (($field = validateForm($data, ['name', 'email'])) !== true) {
                    $result->error = true;
                    $result->field = $field;
                } else {
                    $mail_from = EMAIL_INFO_TARIFF;

                    $cases = [
                        'case1' => 'Продвижение аксессуаров для компьютерных игр от кампании-производителя',
                        'case2' => 'Кампания для онлайн-сервиса грузоперевозок',
                        'case3' => 'Продвижение конструктора сайтов среди вебмастеров, частных предпринимателей и владельцев малого бизнеса'
                    ];

                    $case = isset($data['case']) && isset($cases[$data['case']]) ? $data['case'] : 'case1';

                    $title = $cases['case1'];
                    $url = "http://{$_SERVER['HTTP_HOST']}/#$case";

                    $message = sprintf("<p>Тут %s интересный кейс про \"%s\".</p>", '<a href="' . $url . '">' . $url . '</a>', $title);
                    if (isset($data['comment'])) {
                        $message .= '<p>' . $data['comment'] . '</p>';
                    }

                    require(__DIR__ . "/lib/phpmailer/class.phpmailer.php");
                    $mail = new PHPMailer();
                    $mail->CharSet = "utf-8";
                    $mail->setFrom($mail_from);
                    $mail->addAddress($data['email']);
                    $mail->isHTML(true);
                    $mail->Subject = 'Интересный кейс контент-маркетинга на alfa-content.ru';
                    $mail->Body = $message;
                    $mail->send();
                }
            }
        }
        return $result->json();
    }

    public function actionCase() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id !== null) {
            require "views/cases/case$id.php";
        } else {
            echo "<h2>Кейс не найден</h2>";
        }
    }

}
