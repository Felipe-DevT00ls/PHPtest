<?php
namespace Core;

class Controller{
    public function loadViewInTemplate($view, $data = array()){
        extract($data);
        require "views/".$view.".php";
    }

    public function loadTemplate($view, $data = array()){
        require "views/Template.php";
    }
}