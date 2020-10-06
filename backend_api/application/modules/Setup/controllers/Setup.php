<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Setup extends MY_Admin {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_setup');
    } 

    function ajax_edit(){
        $data = $this->M_setup->get_by_id();
		
		echo json_encode($data);
    }


    function ajax_edit_en(){
        $data = $this->M_setup->get_by_en();
		
		echo json_encode($data);
    }

    function ajax_edit_jp(){
        $data = $this->M_setup->get_by_jp();
		
		echo json_encode($data);
    }
}    