<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Admin
 *
 * @author Ovidiu
 */
class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Main Admin page -> shows the partnumber table
     */
    public function index() {
        $this->load->helper('url');
        $this->load->view('templates/header');
	$this->load->view('masterspc/admin');
        $this->load->view('templates/footer');
    }
    
    public function ajax_list()
    {
        $this->load->model('ReferinteDatatables_model','referinte');

        $list = $this->referinte->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $part) {
                $no++;
                $row = array();
                $row[] = $part->partNo;
                $row[] = $part->customer;
                $row[] = $part->material;
                $row[] = $part->thickness;
                $row[] = $part->dim1;
                $row[] = $part->tol_plus1;
                $row[] = $part->tol_minus1;
                $row[] = $part->dim2;
                $row[] = $part->tol_plus2;
                $row[] = $part->tol_minus2;

                $data[] = $row;
        }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->referinte->count_all(),
                "recordsFiltered" => $this->referinte->count_filtered(),
                "data" => $data,
                            );
            //output to json format
            echo json_encode($output);
    }    
}
