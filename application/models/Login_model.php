<?php
class Login_model extends CI_Model
{

    public function login($uname, $pass)
    {
        $sql = "SELECT * FROM users WHERE username=? and password=?";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}