<?php

class Controller {

    public function run($action = 'index') {
        $method = "action$action";
        if (!method_exists($this, $method)) {
            throw new Exception("Метод не найден");
        }

        return $this->$method();
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
                if (($field = validateTariffForm($data)) !== true) {
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

}
