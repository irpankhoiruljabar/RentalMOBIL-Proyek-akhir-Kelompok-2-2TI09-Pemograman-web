<?php
class Mobil_model extends CI_Model
{

    public function join()
    {
        $this->db->select('mobil.*,merk.produk ');
        $this->db->from('mobil');
        $this->db->join('merk', 'mobil.merk_id = merk.id', 'LEFT');

        $query = $this->db->get();
        return $query;
    }
    public function insertdata($data)
    {
        $this->db->insert('mobil', $data);
    }
    public function update_data($data, $table)
    {
        $this->db->where('id', $data["id"]);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // public function  masukan_bayar($data, $table)
    // {
    //     $this->db->where('id', $data["id"]);
    //     $this->db->update($table, $data);
    // }
}