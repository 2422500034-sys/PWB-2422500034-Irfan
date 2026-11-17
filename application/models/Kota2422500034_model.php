<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kota2422500034_model extends CI_Model {
    private $table = 'kota2422500034';
    public function get_all() { return $this->db->order_by('id_kota034','DESC')->get($this->table)->result_array(); }
    public function get_by_id($id) { return $this->db->get_where($this->table, array('id_kota034'=>$id))->row_array(); }
    public function tambah($data) { return $this->db->insert($this->table, $data); }
    public function ubah($data,$id) { return $this->db->where('id_kota034',$id)->update($this->table,$data); }
    public function hapus($id) { return $this->db->delete($this->table,array('id_kota034'=>$id)); }
}
