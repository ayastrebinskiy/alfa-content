<?php

class Controller {

    public function run($action = 'index') {
        $method = "action$action";
        if (!method_exists($this, $method)) {
            throw new Exception("Метод не найден");
        }

        return $this->$method();
    }

    protected function renderFile($file, $params = []) {
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($file);
        return ob_get_clean();
    }

    protected function render($file, $params = []) {
        $content = $this->renderFile($file, $params);
        require 'views/main.php';
    }

    public function actionIndex() {
        $content = '';
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
                    $message = sprintf("Наименование тарифа: %s<br/>Имя: %s<br/>E-mail: %s<br/>Телефон: %s<br/>Экран: %s", $data['tariff'], $data['name'], $data['email'], $data['phone'], $data['screen']);
                    $_SESSION['rcount'] = isset($_SESSION['rcount']) ? $_SESSION['rcount'] + 1 : 1;
                    sendMail($mail_to, 'Заказ с сайта', $message);
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
                        1 => 'Продвижение аксессуаров для компьютерных игр от кампании-производителя',
                        2 => 'Кампания для онлайн-сервиса грузоперевозок',
                        3 => 'Продвижение конструктора сайтов среди вебмастеров, частных предпринимателей и владельцев малого бизнеса'
                    ];

                    $case = isset($data['case']) && isset($cases[$data['case']]) ? $data['case'] : 1;

                    $title = $cases[$case];
                    $url = "http://{$_SERVER['HTTP_HOST']}/case/$case";

                    $message = sprintf("<p>Здравствуйте!</p>"
                            . "<p>Ваш коллега %s отправил вам интересный кейс %s про %s.</p>",$data['name'], '<a href="' . $url . '">' . $url . '</a>', $title);

                    if (isset($data['comment'])) {
                        $message .= '<p>' . $data['comment'] . '</p>';
                    }

                    sendMail($data['email'], 'Интересный кейс контент-маркетинга на alfa-content.ru', $message, $mail_from);
                }
            }
        }
        return $result->json();
    }

    public function actionCase() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id === null || !is_file(__DIR__ . "/views/cases/case$id.php")) {
            if (isAjaxRequest() === true) {
                echo "<div class='white-popup'>Кейс не найден</div>";
                exit;
            } else {
                redirect('/');
            }
        }
        if (isAjaxRequest() === true) {
            require "views/cases/case$id.php";
        } else {
            $this->render("views/cases/case$id.php");
        }
    }

}
