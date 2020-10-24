<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['list_barang'] = $this->my_model->get_data('tbl_barang');
        $this->load->view('v_barang', $data);
    }

}