<?php
 class Pages extends Controller {
    public function __construct(){
    }

    public function about(){
        $this->view('pages/about');
    }
    public function index() {
      if(isLoggedIn()) {
         ridirect('posts');
      }

      $data = ['title' => 'Welcome'
      
   ];

       $this->view('pages/index' , $data);
    }
 }