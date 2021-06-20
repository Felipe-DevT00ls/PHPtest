<?php
use Core\Controller;
use Models\Cep;

class HomeController extends Controller{
    public function index(){
        $query = new Cep();
        $this->loadTemplate("Home");
    }
}