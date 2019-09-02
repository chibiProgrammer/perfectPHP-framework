<?php

class Dispatcher
{
    private $sysRoot;
    
    public function setSystemRoot($path)
    {
        $this->sysRoot = rtrim($path, '/');
    }

    public function dispatch()
    {
        $param = preg_replace('/?$','',$_SERVER['REQUEST_URL']);
        
        $params = array();
        if(''!= $param){
            $params = explode('/', $param);
        }

        $controller = 'index';
        if(0 < count($params)){
            $controller = $params[0];
        }

        $className = ucfirst(strtolower($controller)) . 'Controller';
        require_once $this->sysRoor.'/controllers/'.$className.'php';
        $controllerInstance = new $className();

        $action = 'index';
        if(1 < count($params)){
            $action = $params[1];
        }

        $actionMethod = $action . 'Action';
        $controllerInstance->$actionMethod();
    }
}
?>