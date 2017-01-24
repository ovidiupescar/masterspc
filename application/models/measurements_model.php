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
class Orders_model extends OP_model {
    
    const DB_TABLE = 'orders';
    const DB_TABLE_PK = 'rp';
    
    /**
     * Rp number unique identifier
     * @var string
     */
    public $rp;
    
    /**
     * Date of introduction
     * @var timestamp
     */
    public $data;
    
    /**
     * Part number
     * @var string
     */
    public $partNo;
    
     /**
     * Order number
     * @var string
     */
    public $orderNo;
    
    /**
     * User id that created this entry
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
