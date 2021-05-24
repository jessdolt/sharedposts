<?php 


    class News extends Controller{


        public function __construct(){

        } 

        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $data = [
                    'title' => trim($_POST['title']),
                    'description' => trim($_POST['description']),
                    'title_err' => '',
                    'description_err' => ''
                ];
                
                if(empty($data['title'])){
                    $data['title_err'] = 'Add a title into the news';
                }
                if(empty($data['description'])){
                    $data['description_err'] = 'Add a description into the news';
                }

                if(empty($data['title_err']) && empty($data_description_err)){
                    die("Success!");
                }
            }
            else{
                $data = [
                    'title' => '', 
                    'description' => '',
                    'title_err' => '',
                    'description_err' => ''
                ];
            }

            $this->view('news/add', $data);
        }
    }