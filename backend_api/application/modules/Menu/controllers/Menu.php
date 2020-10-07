<?php (defined('BASEPATH')) or exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Menu extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_user');
        $this->load->library('session');
        $this->load->model('m_menu');
    }

    public function index()
    {
        $data['title'] = "Table Menu";
        $data['views'] = $this->m_menu->get_menu();
        $this->load->view('Menu/view', $data);
    }

    public function add()
    {
        $data['title'] = "Add Menu";
        $this->load->view('add', $data);
    }

    public function save()
    {
        $menu = $this->m_menu;
        $menu->save();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Menu Berhasil Disimpan :)</div>');
        redirect('Menu');
    }

    public function edit($ID)
    {
        $data['title'] = 'Edit Menu';
        $data['get'] = $this->m_menu->get_by_id($ID);
        $this->load->view('edit', $data);
    }

    public function update()
    {
        $menu = $this->m_menu;
        $menu->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Menu Berhasil Diubah :)</div>');
        redirect('Menu');
    }
}
