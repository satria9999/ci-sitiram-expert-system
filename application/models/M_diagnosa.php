<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_diagnosa extends CI_Model

{
    public function show_data()
    {
    $show_data = $this->db->get('diagnosa');
    return $show_data;
    }

    // Inside M_diagnosa model
// public function simpanDiagnosa($data) {
//     $this->db->insert('diagnosa', $data);
// }

// Di model M_diagnosa
// Inside M_diagnosa model
public function show_diagnosa($where)
{
    $this->db->where($where);
    return $this->db->get('diagnosa'); // Replace 'your_table_name' with your actual table name
}

public function hitungJumlahdiagnosa() {
    $this->db->select('COUNT(*) as jumlah_diagnosa');
    $this->db->from('diagnosa');

    $result = $this->db->get();

    if ($result) {
        $row = $result->row();
        $jumlah_diagnosa= $row-> jumlah_diagnosa;
        return $jumlah_diagnosa;
    } else {
        // Tambahkan log error
        log_message('error', 'Gagal mengambil data rule penyakit dari database.');
        echo 'Error in model'; // Tambahkan echo untuk debugging
        return 0; // Return 0 if there are no records
    }
}


public function simpanDiagnosa($where,$data,$table)
        {
        $this->db->where($where);
        $this->db->update($table,$data);
        }

        public function add_diagnosa($table, $data) {
            $this->db->insert($table, $data);
    
            // You can add additional logic here if needed
    
            return $this->db->insert_id(); // Return the inserted ID
        }

        public function getDiagnosaById($id_diagnosa) {
            // Assuming 'diagnosa' is your table name
            $this->db->where('id_diagnosa', $id_diagnosa);
            $query = $this->db->get('diagnosa');
    
            return $query->row_array(); // Assuming you expect a single row
        }
        
public function insertDiagnosisData($diagnosisData) {
    // Assuming $diagnosisData is an associative array with keys 'kode_penyakit', 'nama', 'solusi'
    $this->db->insert('diagnosis', $diagnosisData);
}

    public function edit_data($table,$id_penduduk)
        {
        $edit = $this->db->get_where($table,$id_penduduk);
        return $edit;
        }

    public function delete($where)
    {
    $this->db->delete('penduduk',$where);
    }
}
?>