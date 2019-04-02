<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories_edit extends CI_Controller {

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
        $this->load->view('eng_main_categories_edit');
        $this->load->view('merchant-js');
	}

  function update() {
      $getName = $this->input->post("name");
      $getAmount1 = $this->input->post("text1");
      $getAmount2 = $this->input->post("text2");
      $id = $this->input->post("id");

      if($getAmount1 == "") {
          $amount = $getAmount2;
      }
      else {
          $amount = number_format((float) $getAmount1, 2, '.','')/100;
      }

      $data = array(
          "nama_diskon" => $getName,
          "jumlah" => $amount
      );
      $where = array(
          "id_diskon" => $id
      );

      $this->m_crud->update_data($where, $data, 'diskon');
      redirect('discounts');
  }

}
