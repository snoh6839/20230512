<?php
namespace application\controller;

class UserController extends Controller {
    public function loginGet() {
        return "login". _EXTENTION_PHP;
    }

    public function loginPost()
    {
        $result = $this->model->getUser($_POST);
        if(count($result) === 0) {
            $errMsg = "Invalid ID or PW";
            addDynamicProperty("errMsg", $errMsg);
            return "login". _EXTENTION_PHP;
        }
        return _BASE_REDIRECT."/anime/detail";
    }
}
?>