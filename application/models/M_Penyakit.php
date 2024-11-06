<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Penyakit extends CI_Model

{
    public function show_data()
    {
    $show_data = $this->db->get('penyakit');
    return $show_data;
    }

    public function add_data($table,$data)
    {
    $this->db->insert($table,$data);
    }

    public function edit_data($table,$kode_penyakit)
        {
        $edit = $this->db->get_where($table,$kode_penyakit);
        return $edit;
        }
        public function update($where,$data,$table)
        {
        $this->db->where($where);
        $this->db->update($table,$data);
        }

    public function delete($where)
    {
    $this->db->delete('penyakit',$where);
    }

    // In your M_penduduk model
    public function getAnggotaByIdKartukeluarga($id_kartukeluarga) {
    $this->db->where('id_kartukeluarga', $id_kartukeluarga);
    return $this->db->get('kartu_keluarga')->result();
}

public function cek_data_exists($table, $where) {
    $this->db->where($where);
    $query = $this->db->get($table);
    return $query->num_rows() > 0;
}

public function getNamabykode1($kodepenyakit1) {

    $query = $this->db->get_where('penyakit', array('kode_penyakit' => $kodepenyakit1));
    $row = $query->row();

    if ($row) {
        return $row->nama;
    } else {
        return null;
    }
}

public function detail_penduduk($table,$id_kartukeluarga)
    {
    $edit = $this->db->get_where($table,$id_kartukeluarga);
    return $edit;
    }

    public function getNamaById($idPenduduk) {

        $query = $this->db->get_where('penduduk', array('id_penduduk' => $idPenduduk));
        $row = $query->row();
    
        if ($row) {
            return $row->nama;
        } else {
            return null;
        }
    }

    public function hitungJumlahPenyakit() {
        $this->db->select('COUNT(*) as jumlahPenyakit');
        $this->db->from('penyakit');
    
        $result = $this->db->get();
    
        if ($result) {
            $row = $result->row();
            $jumlahPenyakit = $row->jumlahPenyakit;
            return $jumlahPenyakit;
        } else {
            // Tambahkan log error
            log_message('error', 'Gagal mengambil data penduduk dari database.');
            echo 'Error in model'; // Tambahkan echo untuk debugging
            return 0; // Return 0 if there are no records
        }
    }
    
    
}


?>