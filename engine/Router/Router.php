<?php

namespace Engine\Router;
use Engine\View\View;

class Router
{
    private $url;

    public function __construct($routes)
    {
        $this->url = $this->url();
        
        // $arr = require_once VIEW_DIR . 'arr.php';
        // echo $arr['1'];
    }

    public function run()
    {
       if ($this->pageExist()) 
       {
           $view = new View($this->url);
           return $view->render();
       }else
       {
        echo 'Страница не найдена';
       }
    }

    public function url()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url, '/');
        $url = preg_replace("#\?.*$#", null, $url);
        if ($url == '') {
            $url = 'main';
        }

        // echo $url1 . "<br>";
        // $getUrl = preg_replace("#^.*\?#", null, $url);
        // echo $getUrl . "<br>";
        return $url;
    }

    public function pageExist()
    {
        $views = array_diff(scandir(VIEW_DIR), ['.','..']);
        foreach ($views as $view) {
            if ($view == $this->url) {
                return true;
            }
        }

        return false;
    }
}

