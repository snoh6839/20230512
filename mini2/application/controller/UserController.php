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
            $this->addDynamicProperty("errMsg", $errMsg);
            return "login". _EXTENTION_PHP;
        }
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        return _BASE_REDIRECT."/anime/main";
    }

    //logout method
    public function logoutGet()
    {
        session_unset();
        session_destroy();
        return "login" . _EXTENTION_PHP;
    }

    public function sinUpGet()
    {
        return "signup" . _EXTENTION_PHP;
    }

    public function sinUpPost()
    {
        $result = $this->model->getUser($_POST);
        if ( count($result) > 0 ) {
            echo 'This User Already Exists';
        } else {
            $data = array(
                'user_name' => $_POST['name'],
                'user_id' => $_POST['id'],
                'user_pw' => $_POST['pw']
            );
            return $this->model->setUser($data);
        }
    

        
        return _BASE_REDIRECT . "/user/login";
    }
}
?>