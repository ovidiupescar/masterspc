<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Afisare
 *
 * @author Ovidiu
 */
class Afisare extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    public function index() {
        $this->load->model('Users_model','users');
       
//        $this->users->user='andreeapescar';
//        $this->users->name='Andreea Pescar';
//        $this->users->company='Tidying up';
//        $this->users->email='hehehe.com';
//        $this->users->password=':*:*:*:*:*:*:*:*:*:*:**::';
        
        $this->load->view("templates/header");
        $this->load->view('masterspc/home');               
        $users = $this->users->get();
        
        foreach ($users as $user) {
            
            echo $user->id.'. '.$user->name.' '.$user->user.'<br>';
        }

       // echo '<tt><pre>'.var_export($test, True).'</pre></tt>';
        
        $this->load->view("templates/footer");
    }
    public function home() {
        
        $this->load->view('templates/header');
        $this->load->view('masterspc/home');
        $this->load->view('templates/footer');
    }
}


