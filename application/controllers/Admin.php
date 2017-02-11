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
        $this->load->helper('url');
        $this->load->database();
    }

    /**
     * Main Admin page -> shows the partnumber table
     */
    public function index() {
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

    /**
     * shows all the details of the part number selected
     * @param int $currentPartNo
     */
    public function viewPartNo($currentPartNo = NULL) {

        $this->load->model('Referinte_model','referinte');
        $this->referinte->load($currentPartNo);

        $data['partNo'] = $this->referinte->partNo;
        $data['data'] = $this->referinte->data;
        $data['customer'] = $this->referinte->customer;
        $data['material'] = $this->referinte->material;
        $data['thickness'] = $this->referinte->thickness;
        $data['dim1'] = $this->referinte->dim1;
        $data['tol_plus1'] = $this->referinte->tol_plus1;
        $data['tol_minus1'] = $this->referinte->tol_minus1;
        $data['dim2'] = $this->referinte->dim2;
        $data['tol_plus2'] = $this->referinte->tol_plus2;
        $data['tol_minus2'] = $this->referinte->tol_minus2;
        $data['userid'] = $this->referinte->userid;

        $this->load->view('templates/header');

        $this->load->view('masterspc/partNumber',$data);

        $this->load->view('templates/footer');

    }

    /**
     * shows all the details of the part number selected
     * @param int $currentPartNo
     */
    public function createPartNo() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('partNo', 'Part number', 'required');
        $this->form_validation->set_rules('customer', 'Customer', 'required');
        $this->form_validation->set_rules('material', 'Material', 'required');
        $this->form_validation->set_rules('thickness', 'Thickness', 'required');
        $this->form_validation->set_rules('dim1', 'All dimenstions and tolerances', 'required');
        $this->form_validation->set_rules('tol_plus1', 'All dimenstions and tolerances', 'required');
        $this->form_validation->set_rules('tol_minus1', 'All dimenstions and tolerances', 'required');
        $this->form_validation->set_rules('dim2', 'All dimenstions and tolerances', 'required');
        $this->form_validation->set_rules('tol_plus2', 'All dimenstions and tolerances', 'required');
        $this->form_validation->set_rules('tol_minus2', 'All dimenstions and tolerances', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('masterspc/newPartNumber');
            $this->load->view('templates/footer');

        }
        else
        {   
            $this->load->model('Referinte_model','referinte');
            
            $this->referinte->partNo = $this->input->post('partNo');
            $this->referinte->customer = $this->input->post('customer');
            $this->referinte->material = $this->input->post('material');
            $this->referinte->thickness = $this->input->post('thickness');
            $this->referinte->dim1 = $this->input->post('dim1');
            $this->referinte->tol_plus1 = $this->input->post('tol_plus1');
            $this->referinte->tol_minus1 = $this->input->post('tol_minus1');
            $this->referinte->dim2 = $this->input->post('dim2');
            $this->referinte->tol_plus2 = $this->input->post('tol_plus2');
            $this->referinte->tol_minus2 = $this->input->post('tol_minus2');
            
            $this->referinte->data = time();
            $this->referinte->userid = 1;
                        
            $this->referinte->save();
            
            $this->viewPartNo($this->referinte->partNo);
            
        }

    }
}