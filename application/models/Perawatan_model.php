<?php
    class Perawatan_model extends CI_Model {

   public function join(){
    $this->db->select('perawatan.*,jenis_perawatan.id as id_jenis,  jenis_perawatan.nama as nama_jenis,merk.produk as nama_merk, merk.id as id_merk');
    $this->db->from('perawatan');
    $this->db->join('mobil','perawatan.mobil_id = mobil.id','LEFT');      
    $this->db->join('jenis_perawatan','perawatan.jenis_perawatan_id  = jenis_perawatan.id','LEFT');
    $this->db->join('merk','mobil.merk_id  = merk.id','LEFT');
    $query = $this->db->get();
    return $query;
    }
    public function insert_data($data, $table)
    {
    $this->db->insert($table, $data);
    }
    public function update_data($data, $table)
    {
       $this->db->where('id',$data["id"]);
       $this->db->update($table, $data);
   }
   public function delete_data($where, $table)
   {
    $this->db->where($where);
    $this->db->delete($table);
   }
   public function  masukan_bayar($data, $table)
   {
      $this->db->where('id',$data["id"]);
      $this->db->update($table, $data);
  }

    }
?>