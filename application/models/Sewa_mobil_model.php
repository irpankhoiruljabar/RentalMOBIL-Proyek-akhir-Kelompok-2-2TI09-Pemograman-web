<?php
class Sewa_mobil_model extends CI_Model
{

    public function join()
    {
        $this->db->select('sewa.*,users.username, merk.produk, merk.id as id_merk');
        $this->db->from('sewa');
        $this->db->join('mobil', 'sewa.mobil_id = mobil.id', 'LEFT');
        $this->db->join('users', 'sewa.users_id  = users.id', 'LEFT');
        $this->db->join('merk', 'mobil.merk_id  = merk.id', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}