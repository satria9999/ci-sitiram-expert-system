<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Diagnosa_penyakit extends CI_Model

{
    public function show_data()
    {
    $show_data = $this->db->get('diagnosa_penyakit');
    return $show_data;
    }

    public function add_data($table,$data)
    {
    $this->db->insert($table,$data);
    }

    public function edit_data($table,$rule)
        {
        $edit = $this->db->get_where($table,$rule);
        return $edit;
        }
        public function update($where,$data,$table)
        {
        $this->db->where($where);
        $this->db->update($table,$data);
        }

    public function delete($where)
    {
    $this->db->delete('diagnosa_penyakit',$where);
    } 

// Diagnosa_model.php
public function getDiagnosisInfo($selectedGejala) {
    $this->db->select('kode_penyakit, nama, solusi');
    $this->db->from('diagnosa_penyakit');
    
    foreach ($selectedGejala as $key => $value) {
        $this->db->where("kode_gejala" . ($key + 1), $value);
    }

    $query = $this->db->get();

    return $query->result_array();
}

public function hitungJumlahrule() {
    $this->db->select('COUNT(*) as jumlah_rule');
    $this->db->from('diagnosa_penyakit');

    $result = $this->db->get();

    if ($result) {
        $row = $result->row();
        $jumlah_rule= $row-> jumlah_rule;
        return $jumlah_rule;
    } else {
        // Tambahkan log error
        log_message('error', 'Gagal mengambil data rule penyakit dari database.');
        echo 'Error in model'; // Tambahkan echo untuk debugging
        return 0; // Return 0 if there are no records
    }
}
}


?>