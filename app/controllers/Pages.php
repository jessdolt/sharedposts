<?php

class Pages extends Controller{
    public function __construct(){
       
    }
    
    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }
        
        $data = [
            'title' => 'Shareposts',
            'description' => 'Simple social network built on the Jess MVC PHP Framework'
        ]; 

       $this->view('pages/index' ,$data);
    }

    public function about(){
        $data = [
            'title' => 'About',
            'description' => 'App to share posts with other users'
        ]; 
        $this->view('pages/about', $data);
    }
    
    public function events(){
        $data = [
            'title' => 'About',
            'description' => 'App to share posts with other users'
        ]; 
        $this->view('pages/events', $data);
    }
    
    public function errorPage(){
        $data = [];
        $this->view('pages/404',$data);
    }
}