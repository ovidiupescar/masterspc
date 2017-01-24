<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Measurements_model
 *
 * @author Ovidiu
 */
class Measurements_model extends OP_model {
    
    const DB_TABLE = 'measurements';
    const DB_TABLE_PK = 'id';
    
    /**
     * Measurement unique identifier
     * @var int
     */
    public $id;
    
    /**
     * Rp number
     * @var string
     */
    public $rp;
    /**
     * User id that created the measurement
     * @var int
     */
    public $userid;
    
     /**
     * Date of measurement
     * @var timestamp
     */
    public $data;
    
    /**
     * Blank number
     * @var int
     */
    public $blank;
    
    /**
     * Measurement
     * @var int
     */
    public $m1;
    
    /**
     * Measurement
     * @var int
     */
    public $m2;
    
    /**
     * Measurement
     * @var int
     */
    public $m3;
    
    /**
     * Measurement
     * @var int
     */
    public $m4;
    
    /**
     * Measurement
     * @var int
     */
    public $m5;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}
