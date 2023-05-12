<?php
// echo "controller";
namespace application\controller;

class Controller {
    protected $model;
    private static $modelList = [];

    public function __construct($identityName, $action)
    {
        //session start
        if(!isset($_SESSION)){
            session_start();
        }

        $this->model = $this->getModel($identityName);
    }

    protected function getModel($identityName){
        if(!in_array($identityName, self::$modelList)){
            $modelName = _PATH_MODEL.$identityName._BASE_FILENAME_MODEL;
            self::$modelList[$identityName] = new $modelName();
        }
        return self::$modelList[$identityName];
    }
}
?>