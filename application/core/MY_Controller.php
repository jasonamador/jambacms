<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Author: Jason Benford
 * File: /application/core/MY_Controller.php
 * Description: The lowest level application controller, from which all others will inherit.
 * Multiple layers of inheritence is supported.
 * This rely's on the base class autoloader by Sepehr Lajevardi <me@sepehr.ws>, https://github.com/sepehr/ci-base-controllers
 */

abstract class Base_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//we currently are not doing anything with this controller, just here for all others to inherit from CI_Controller
	}
}

// End of Base_Controller class
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
