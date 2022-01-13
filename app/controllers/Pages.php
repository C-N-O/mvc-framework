<?php

class Pages extends Controller
{

   public function __construct(){

    }

    //we need to define this method as it is our default page
    public function index(){
        $data = [
            'title' => "Welcome to the Home page",
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => "Welcome to the About page",
        ];
        $this->view('pages/about', $data);
    }


}