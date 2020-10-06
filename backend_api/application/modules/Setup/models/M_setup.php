<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_setup extends CI_Model
{


  public function get_by_id()
  {
    $this->db->select('a.fc_isi_id as set_data_id,
                           b.fc_isi_id as set_data_id2,
                           c.fc_isi_id as set_data_id3,
                           d.fc_isi_id as set_data_id4,
                           ');
    $this->db->from('t_setup a');
    $this->db->join('t_setup b ', 'b.fc_param="Menu2"', 'left outer');
    $this->db->join('t_setup c ', 'c.fc_param="Menu3"', 'left outer');
    $this->db->join('t_setup d ', 'd.fc_param="Menu4"', 'left outer');
    //$this->db->join('t-setup e ', 'e.fc_param="Menu5"', 'left outer');
    $this->db->where('a.fc_param', 'Menu1');

    $query = $this->db->get();
    return $query->result();
  }

  public function get_by_en()
  {
    $this->db->select('
            a.fc_isi_en as set_data_id,
            b.fc_isi_en as set_data_id2,
            c.fc_isi_en as set_data_id3,
            d.fc_isi_en as set_data_id4
            ');
    $this->db->from('t_setup a');
    $this->db->join('t_setup b ', 'b.fc_param="Menu2"', 'left outer');
    $this->db->join('t_setup c ', 'c.fc_param="Menu3"', 'left outer');
    $this->db->join('t_setup d ', 'd.fc_param="Menu4"', 'left outer');
    //$this->db->join('t-setup e ', 'e.fc_param="Menu5"', 'left outer');
    $this->db->where('a.fc_param', 'Menu1');

    $query = $this->db->get();
    return $query->result();
  }

  public function get_by_jp()
  {
    $this->db->select('
            a.fc_isi_jp as set_data_id,
            b.fc_isi_jp as set_data_id2,
            c.fc_isi_jp as set_data_id3,
            d.fc_isi_jp as set_data_id4
            ');
    $this->db->from('t_setup a');
    $this->db->join('t_setup b ', 'b.fc_param="Menu2"', 'left outer');
    $this->db->join('t_setup c ', 'c.fc_param="Menu3"', 'left outer');
    $this->db->join('t_setup d ', 'd.fc_param="Menu4"', 'left outer');
    //$this->db->join('t-setup e ', 'e.fc_param="Menu5"', 'left outer');
    $this->db->where('a.fc_param', 'Menu1');

    $query = $this->db->get();
    return $query->result();
  }
}
