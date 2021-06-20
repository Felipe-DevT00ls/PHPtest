<?php
use Core\Controller;

class SearchController extends Controller{
    public function index(){
        $this->loadTemplate("Search");
    }
}