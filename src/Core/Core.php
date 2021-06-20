<?php
namespace Core;

class Core{
    public function run(){
        $url = "/";
        if(isset($_GET["url"])){
            $url = "/".$_GET["url"];
        }

        $params = array();
        if(!empty($url) && $url != "/"){
            $url = explode("/", $url);
            array_shift($url);
            
            $currentController = $url[0]."Controller";
            array_shift($url);

            if(isset($url) and !empty($url) and $url[0] != ""){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = "index";
            }

            if(count($url)>0){
                $params = $url;
            }
        }else{
            $currentController = "homeController";
            $currentAction = "index";
        }

        $currentController = ucfirst($currentController);

        $instance = new $currentController();
        call_user_func_array(array($instance, $currentAction), $params);
    }
}