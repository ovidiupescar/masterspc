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
class Users_model extends OP_model {
    
    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'id';
    
    /**
     * User unique identifier
     * @var int
     */
    public $id;
    
    /**
     * username name
     * @var string
     */
    public $user;
    
    /**
     * User name
     * @var text
     */
    public $name;
    
     /**
     * Company name
     * @var text
     */
    public $company;
    
    /**
     * user email
     * @var text
     */
    public $email;
    
    /**
     * user password
     * @var text
     */
    public $password;


    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}
