<?php

//this is a new controller

class News extends CI_Controller{

    public function __construct(){
        parent:: __construct(); //this calls the constructor of class (CI_Controller)

        $this->load->model('News_model'); // the constructor here loads the model so it can be used in all other methods
        $this->load->helper('url_helper'); // the constructor again loads the URl helper functions 

    }

    //NOTE: Here data is retrieved by the controller through the model

    public function index(){

        $data['news'] = $this->News_model->get_news();
        $data['title'] = 'News Archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
        

    }


    public function view($slug = NULL){
        $data['news_item'] = $this->News_model->get_news($slug);

        if(empty($data['news_item'])){
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
        

    }

    public function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a news item';

        //setting validation rules

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        //testing the validation rules

        if($this->form_validation->run() === FALSE){

            $this->load->view('templates/header', $data);
            $this->load->view('news/create'); //this connects the create.php file in the views
            $this->load->view('templates/footer');

        }else{

            $this->News_model->set_news();
            $this->load->view('news/success');

        }


    }









}