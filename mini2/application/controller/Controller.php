<?php
// echo "controller";
namespace application\controller;

use application\util\UrlUtil;

class Controller {
    protected $model;
    private static $modelList = [];

    public function __construct($identityName, $action)
    {
        //session start
        if(!isset($_SESSION)){
            session_start();
        }

        //call model
        $this->model = $this->getModel($identityName);

        // call controller's method
        $view = $this->$action();

        if(empty($view)){
            echo "This Controller dose not has method : ".$action;
            exit();
        }

        //call view
        require_once $this->getView($view);
    }


    // call model and return result
    protected function getModel($identityName){
        // check if model created
        if(!in_array($identityName, self::$modelList)){
            $modelName = UrlUtil::replacSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            self::$modelList[$identityName] = new $modelName();
        }
        return self::$modelList[$identityName];
    }

    //check param and return view or redirect
    public function getView($view){
        return _PATH_VIEW.$view;
    }
}
?>