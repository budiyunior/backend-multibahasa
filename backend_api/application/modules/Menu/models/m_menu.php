<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_menu extends CI_Model{
        

    public $tables = "t_setup";

    public function get_menu()
    {
        return $this->db->get($this->tables)->result();
    }

    public function save()
    {
        $add = $this->input->post();
        $this->fc_param = $add['fc_param'];
        $this->fc_kode = $add['fc_kode'];
        $this->fc_isi_id = $add['fc_isi_id'];
        $this->fc_isi_en = $add['fc_isi_en'];
        $this->fc_isi_jp = $add['fc_isi_jp'];
        $this->db->insert($this->tables, $this);
    }

    public function update()
    {

    }
}