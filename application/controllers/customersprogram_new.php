<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customersprogram_new extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function index() {
        $this->load->view('merchant-css');
        $this->load->view('eng_main_customers_loyaltyprogram_add');
        $this->load->view('merchant-js');
	}

}
