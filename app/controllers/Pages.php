<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'TheCoders4u'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function code(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function info(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function members(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function portfolio(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function sample(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }

    public function testmonials(){
      $data = [
          'title' => 'Contact Us'
      ];

      $this->view('pages/contact', $data);
    }
  }