<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Menu extends MX_Controller {

	public function __construct(){
        parent::__construct();
        // $this->load->model('M_user');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = "Table Menu";
        $this->load->view('Menu/view', $data);
    }

    public function add()
    {
        $data['title'] = "Add Menu";
        $this->load->view('Menu/add', $data);
    }

}