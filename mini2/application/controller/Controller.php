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

    }
}
?>