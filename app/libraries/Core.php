<?php

class Core {
    protected $controladorActual = 'Pages';
    protected $metodoActual = 'index';
    protected $parametros = [];
    //Constructor
    public function __construct()
    {
        //print_r($this->getUrl());
        $url = $this->getUrl();
        $chkUrl = ($url != null) ? true : false; 
            if($chkUrl && file_exists('../app/controllers/' .ucwords($url[0]).'.php')){
                $this->controladorActual = ucwords($url[0]);
    
                unset($url[0]);
            }

        require_once '../app/controllers/'. $this->controladorActual . '.php';
        $this->controladorActual = new $this->controladorActual;

        if(isset($url[1])){
            if(method_exists($this->controladorActual,$url[1])){
                $this->metodoActual = $url[1];
                unset($url[1]);
            }
        }

        $this->parametros = $url ? array_values($url) : [];

        //llamara callback con parametros array
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

    }

    public function getUrl(){
        //echo $_GET['url'];

        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}
