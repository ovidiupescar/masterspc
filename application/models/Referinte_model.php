<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Users_model
 *
 * @author Ovidiu
 */
class Referinte_model extends OP_model {
    
    const DB_TABLE = 'referinte';
    const DB_TABLE_PK = 'partNo';
    
    /**
     * Part Number unique identifier
     * @var int
     */
    public $partNo;
    
    /**
     * Date of record creation
     * @var date
     */
    public $data;
    
    /**
     * Customer
     * @var string
     */
    public $customer;
    
     /**
     * Material number
     * @var string
     */
    public $material;
    
    /**
     * Material thickness
     * @var int
     */
    public $thickness;
    
    /**
     * First dimension
     * @var int
     */
    public $dim1;
    
    /**
     * First dimension plus tolerance
     * @var int
     */
    public $tol_plus1;

    /**
     * First dimension minus tolerance
     * @var int
     */
    public $tol_minus1;
    
    /**
     * Second dimension
     * @var int
     */
    public $dim2;
    
    /**
     * Second dimension plus tolerance
     * @var int
     */
    public $tol_plus2;

    /**
     * Second dimension minus tolerance
     * @var int
     */
    public $tol_minus2;

    /**
     * Second dimension minus tolerance
     * @var int
     */
    public $userid;
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}
