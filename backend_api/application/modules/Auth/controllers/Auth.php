<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Auth extends MX_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('session');
    }

    public function index(){
        if(isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => md5($password) 
            );
            $cek_login = $this->M_user->where($where);
            if($cek_login->num_rows() > 0){
                $sql = $cek_login->result_array();
                
                $items = array();
                foreach($sql as $key) {
                    $items = $key;
                }
                // print_r($items);
                $this->session->set_userdata($items);
                
                $this->session->set_flashdata('data','<div class="alert alert-success">Berhasil Masuk</div>');
                redirect('Dashboard');
            }else{
                $this->session->set_flashdata('data','<div class="alert alert-danger">Gagal Masuk</div>');
                redirect('/');
            }
        }else{
             $data['module'] = "Auth";
       		 $this->load->view('Auth/login', $data);
        }
    }

     public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth','refresh');
    }

}	