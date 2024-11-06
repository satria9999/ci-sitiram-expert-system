<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
	parent ::__construct();
	$this->load->model('M_diagnosa');
	}

	public function perhitunganKategori($nilai, $kategoriRendah, $kategoriSedang, $kategoriTinggi)
{
    $result = [
        'rendah' => 0,
        'sedang' => 0,
        'tinggi' => 0,
    ];

    
    if ($nilai <= $kategoriRendah['batasRendah']) {
        $result['rendah'] = 1;
    } elseif ($nilai < $kategoriRendah['batasTinggi']) {
        $result['rendah'] = ($kategoriRendah['batasTinggi'] - $nilai) / ($kategoriRendah['batasTinggi'] - $kategoriRendah['batasRendah']);
    }

    if ($nilai >= $kategoriSedang['batasBawah'] && $nilai <= $kategoriSedang['batasAtas']) {
        $result['sedang'] = 1;
    } elseif ($nilai > $kategoriSedang['batasRendah'] && $nilai < $kategoriSedang['batasBawah']) {
        $result['sedang'] = ($nilai - $kategoriSedang['batasRendah']) / ($kategoriSedang['batasBawah'] - $kategoriSedang['batasRendah']);
    } elseif ($nilai > $kategoriSedang['batasAtas'] && $nilai <= $kategoriSedang['batasTinggi']) {
        $result['sedang'] = ($kategoriSedang['batasTinggi'] - $nilai) / ($kategoriSedang['batasTinggi'] - $kategoriSedang['batasAtas']);
    }

    if ($nilai >= $kategoriTinggi['batasTinggi']) {
        $result['tinggi'] = 1;
    } elseif ($nilai > $kategoriTinggi['batasRendah'] && $nilai < $kategoriTinggi['batasTinggi']) {
        $result['tinggi'] = ($nilai - $kategoriTinggi['batasRendah']) / ($kategoriTinggi['batasTinggi'] - $kategoriTinggi['batasRendah']);
    }
    

    return $result;
}

public function perhitungan()
{
    $suhu = $this->input->post('suhu');
    $kelembapan = $this->input->post('kelembapan');
    $id_diagnosa = $this->input->post('id_diagnosa');

    $kategoriSuhuRendah = [
        'batasRendah' => 5,
        'batasTinggi' => 20,
    ];

    $kategoriSuhuSedang = [
        'batasRendah' => 10,
        'batasBawah' => 20,
        'batasAtas' => 30,
        'batasTinggi' => 35,
    ];

    $kategoriSuhuTinggi = [
        'batasRendah' => 30,
        'batasTinggi' => 45,  // Sesuaikan dengan batas tertinggi yang diinginkan
    ];

    $kategoriKelembapanRendah = [
        'batasRendah' => 0,
        'batasTinggi' => 60,
    ];

    $kategoriKelembapanSedang = [
        'batasRendah' => 50,
        'batasBawah' => 60,
        'batasAtas' => 70,
        'batasTinggi' => 80,
    ];

    $kategoriKelembapanTinggi = [
        'batasRendah' => 70,
        'batasTinggi' => 100,  // Sesuaikan dengan batas tertinggi yang diinginkan
    ];

    // Hitung kategori suhu
    $hasilSuhu = $this->perhitunganKategori($suhu, $kategoriSuhuRendah, $kategoriSuhuSedang, $kategoriSuhuTinggi);

    // Hitung kategori kelembapan
    $hasilKelembapan = $this->perhitunganKategori($kelembapan, $kategoriKelembapanRendah, $kategoriKelembapanSedang, $kategoriKelembapanTinggi);

    $suhu_rendah = isset($hasilSuhu['rendah']) ? $hasilSuhu['rendah'] : 0;
    $suhu_sedang = isset($hasilSuhu['sedang']) ? $hasilSuhu['sedang'] : 0;
    $suhu_tinggi = isset($hasilSuhu['tinggi']) ? $hasilSuhu['tinggi'] : 0;

    $kelembapan_rendah = isset($hasilKelembapan['rendah']) ? $hasilKelembapan['rendah'] : 0;
    $kelembapan_sedang = isset($hasilKelembapan['sedang']) ? $hasilKelembapan['sedang'] : 0;
    $kelembapan_tinggi= isset($hasilKelembapan['tinggi']) ? $hasilKelembapan['tinggi'] : 0;

    // Lakukan operasi lain sesuai kebutuhan Anda
    // Inisialisasi nilai minimum dengan nilai maksimum yang mungkin
    $nilai_min = 0;
    $nilai_min2 = 0;
    $nilai_min3 = 0;
    $nilai_min4 = 0;
    $nilai_min5 = 0;
    $nilai_min6 = 0;
    $nilai_min7 = 0;
    $nilai_min8 = 0;
    $nilai_min9 = 0;
    
    $nilai_batasbawah = 1;
    $nilai_batasbawah1 = 1;
    $nilai_batasbawah2 = 1;
    $nilai_batasbawah3 = 1;
    $nilai_batasbawah4 = 1;
    $nilai_batasbawah5 = 1;
    $nilai_batasbawah6 = 1;
    $nilai_batasbawah7 = 1;
    $nilai_batasbawah8 = 1;
    $nilai_batasbawah9 = 1;
    $nilai_batasatas = null;
    
    // Rule 1
    if ($penyebaran_penyakit_rule1 = $suhu_rendah && $kelembapan_rendah) {
        $nilai_min = $this->hitungNilaiMin($suhu_rendah, $kelembapan_rendah);
        $nilai_batasbawah1 = ($nilai_batasbawah1 === null || $nilai_min !== null) ? min($nilai_batasbawah1 ?? PHP_FLOAT_MAX, $nilai_min) : $nilai_batasbawah1;  
    }
    
    // Rule 2
    if ($penyebaran_penyakit_rule2 = $suhu_sedang && $kelembapan_rendah) {
        $nilai_min2 = $this->hitungNilaiMin2($suhu_sedang, $kelembapan_rendah);
        $nilai_batasbawah2 = ($nilai_batasbawah2 === null || $nilai_min2 !== null) ? min($nilai_batasbawah2 ?? PHP_FLOAT_MAX, $nilai_min2) : $nilai_batasbawah2;  
    }
    
    // Rule 3
    if ($penyebaran_penyakit_rule3 = $suhu_tinggi && $kelembapan_rendah) {
        $nilai_min3 = $this->hitungNilaiMin3($suhu_tinggi, $kelembapan_rendah);
        $nilai_batasbawah3 = ($nilai_batasbawah3 === null || $nilai_min3 !== null) ? min($nilai_batasbawah3 ?? PHP_FLOAT_MAX, $nilai_min3) : $nilai_batasbawah3;  
    }
    
    // Rule 4
    if ($penyebaran_penyakit_rule4 = $suhu_rendah && $kelembapan_sedang) {
        $nilai_min4 = $this->hitungNilaiMin4($suhu_rendah, $kelembapan_sedang);
        $nilai_batasbawah4 = ($nilai_batasbawah4 === null || $nilai_min4 !== null) ? min($nilai_batasbawah4 ?? PHP_FLOAT_MAX, $nilai_min4) : $nilai_batasbawah4;  
    }
    
    // Rule 5
    if ($penyebaran_penyakit_rule5 = $suhu_sedang && $kelembapan_sedang) {
        $nilai_min5 = $this->hitungNilaiMin5($suhu_sedang, $kelembapan_sedang);
        $nilai_batasbawah5 = ($nilai_batasbawah5 === null || $nilai_min5 !== null) ? min($nilai_batasbawah5 ?? PHP_FLOAT_MAX, $nilai_min5) : $nilai_batasbawah5;  
    }
    
    // Rule 6
    if ($penyebaran_penyakit_rule6 = $suhu_tinggi && $kelembapan_sedang) {
        $nilai_min6 = $this->hitungNilaiMin6($suhu_tinggi, $kelembapan_sedang);
        $nilai_batasbawah6 = ($nilai_batasbawah6 === null || $nilai_min6 !== null) ? min($nilai_batasbawah6 ?? PHP_FLOAT_MAX, $nilai_min6) : $nilai_batasbawah6;  
    }
    
    // Rule 7
    if ($penyebaran_penyakit_rule7 = $suhu_rendah && $kelembapan_tinggi) {
        $nilai_min7 = $this->hitungNilaiMin7($suhu_rendah, $kelembapan_tinggi);
        $nilai_batasbawah7 = ($nilai_batasbawah7 === null || $nilai_min7 !== null) ? min($nilai_batasbawah7 ?? PHP_FLOAT_MAX, $nilai_min7) : $nilai_batasbawah7;  
    }
    
    // Rule 8
    if ($penyebaran_penyakit_rule8 = $suhu_sedang && $kelembapan_tinggi) {
        $nilai_min8 = $this->hitungNilaiMin8($suhu_sedang, $kelembapan_tinggi);
        // $nilai_batasbawah8 = ($nilai_batasbawah8 === null) ? $nilai_min8 : min($nilai_batasbawah8, $nilai_min8);
        $nilai_batasbawah8 = ($nilai_batasbawah8 === null || $nilai_min8 !== null) ? min($nilai_batasbawah8 ?? PHP_FLOAT_MAX, $nilai_min8) : $nilai_batasbawah8;  
    }
    
    // Rule 9
    if ($penyebaran_penyakit_rule9 = $suhu_tinggi && $kelembapan_tinggi) {
        $nilai_min9 = $this->hitungNilaiMin9($suhu_tinggi, $kelembapan_tinggi);
        $nilai_batasbawah9 = ($nilai_batasbawah9 === null || $nilai_min9 !== null) ? min($nilai_batasbawah9 ?? PHP_FLOAT_MAX, $nilai_min9) : $nilai_batasbawah9;  
    }

// Cetak hasil
// echo "Penyebaran Penyakit Rule 1: " . (isset($penyebaran_penyakit_rule1) ? $penyebaran_penyakit_rule1 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min == 0) ? 'Tidak Memenuhi Rule' : $nilai_min) . ")<br>";
// echo "Penyebaran Penyakit Rule 2: " . (isset($penyebaran_penyakit_rule2) ? $penyebaran_penyakit_rule2 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min2 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min2) . ")<br>";
// echo "Penyebaran Penyakit Rule 3: " . (isset($penyebaran_penyakit_rule3) ? $penyebaran_penyakit_rule3 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min3 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min3) . ")<br>";
// echo "Penyebaran Penyakit Rule 4: " . (isset($penyebaran_penyakit_rule4) ? $penyebaran_penyakit_rule4 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min4 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min4) . ")<br>";
// echo "Penyebaran Penyakit Rule 5: " . (isset($penyebaran_penyakit_rule5) ? $penyebaran_penyakit_rule5 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min5 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min5) . ")<br>";
// echo "Penyebaran Penyakit Rule 6: " . (isset($penyebaran_penyakit_rule6) ? $penyebaran_penyakit_rule6 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min6 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min6) . ")<br>";
// echo "Penyebaran Penyakit Rule 7: " . (isset($penyebaran_penyakit_rule7) ? $penyebaran_penyakit_rule7 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min7 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min7) . ")<br>";
// echo "Penyebaran Penyakit Rule 8: " . (isset($penyebaran_penyakit_rule8) ? $penyebaran_penyakit_rule8 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min8 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min8) . ")<br>";
// echo "Penyebaran Penyakit Rule 9: " . (isset($penyebaran_penyakit_rule9) ? $penyebaran_penyakit_rule9 : 'Tidak Memenuhi Rule') . " ( " . (($nilai_min9 == 0) ? 'Tidak Memenuhi Rule' : $nilai_min9) . ")<br>";
// ... dan seterusnya untuk setiap rule


$nilai_batasbawah = min($nilai_batasbawah1,$nilai_batasbawah2, $nilai_batasbawah3,$nilai_batasbawah4, $nilai_batasbawah5,$nilai_batasbawah6, $nilai_batasbawah7,$nilai_batasbawah8, $nilai_batasbawah9);
// var_dump($nilai_batasbawah1,$nilai_batasbawah2, $nilai_batasbawah3,$nilai_batasbawah4, $nilai_batasbawah5,$nilai_batasbawah6, $nilai_batasbawah7,$nilai_batasbawah8,
// $nilai_batasbawah9);
// Hitung nilai batas atas
$nilai_batasatas = max($nilai_min, $nilai_min2, $nilai_min3, $nilai_min4, $nilai_min5, $nilai_min6, $nilai_min7, $nilai_min8, $nilai_min9);

// Cetak hasil

// echo "<br> Nilai batas bawah: " . $nilai_batasbawah . "<br>";
// echo "Nilai batas atas: " . $nilai_batasatas . "<br>";

// Menentukan 
$nilai_batasbawah = floor($nilai_batasbawah * 100) / 100;
$nilai_batasatas = floor($nilai_batasatas * 100) / 100;

$c1 = (95 * $nilai_batasbawah) +50;
$c2 = (95 * $nilai_batasatas) +50;

//menentukan nilai fungsi keanggotaan
if ($suhu <= 20) {

$z= 10;
}

if ($suhu >= 15 && $suhu <= 35) {
    if ($suhu >= 15 && $suhu < 30) {
        $z= 10;
    } elseif ($suhu >= 30 && $suhu <= 35) {
        $z= 20;
    }
}

if ($suhu >= 40) {
    $z= 20;
}

// echo "hasil z:".$z ."<br>";
//menentukan nilai m
$e1 =$c1 * $c1/2;
$hasil_m1 = $nilai_batasbawah *$e1;
//perhitungan m2
$v1 = $c2*$c2*$c2/3; 
$v2 = $c1*$c1*$c1/3;
$v3 = $v1 - $v2;
$v4 = $v3 /$z;		// echo '<br>';
		// echo "hasil v3:".$v3 ."-".$z ."=".$v4 ."<br>";
		
$v5 =$c2*$c2*3;
$v6 =$v5/2;
$v7 =$c1*$c1*3;
$v8 = $v7/2;
$v9 =$v6-$v8;
// echo "hasil v8:".$v6 ."/".$v8 ."=".$v9 ."<br>";
$hasil_m2 = ($v4 - $v9) / 3.2;
// echo "hasil v3:".$v4 ."-".$v9 ."=".$hasil_m2 ."<br>";
//perhitungan m3
            $b1= 100*100;
            $b2 =$b1/2;
            $b3= $c2*$c2;
            $b4= $b3/2;
            $b5= $b2-$b4;
            // echo "hasil b5:".$b2 ."-". $b4."<br>";
$hasil_m3 = $nilai_batasatas * $b5;


// menentukan a1, a2, a3
//menentukana1
$a1 = $c2*$nilai_batasbawah;
// echo "hasil a1:".$a1 ."<br>";
//menentukan a2
$d1 = $nilai_batasbawah+$nilai_batasatas; 
$d2= $c2-$c1;
$d3= $d1*$d2;
$a2 = $d3/2;
// echo "hasil a2:".$a2 ."<br>";
//menentukan a3
$f1 = 100 - $c2;
$a3 = $f1 * $nilai_batasatas;
// echo "hasil a3:".$a3 ."<br>";

$hasil_m = $hasil_m1 + $hasil_m2 + $hasil_m3;
$hasil_a = $a1 + $a2 + $a3;
$titik_pusat = $hasil_m / $hasil_a;
// Cetak hasil
// echo "Nilai c1: " . $c1 . "<br>";
// echo "Nilai c2: " . $c2 . "<br>";

// echo "Hasil m1: " . $hasil_m1 . "<br>";
// echo "Hasil m2: " . $hasil_m2 . "<br>";
// echo "Hasil m3: " . $hasil_m3 . "<br>";
// echo "Hasil m: " . $hasil_m . "<br>";
// echo "Hasil a: " . $hasil_a . "<br>";
// echo "Hasil titik pusat: " . $titik_pusat . "<br>";

    // Simpan hasil ke database atau lakukan proses selanjutnya
    $data = [
        'suhu' => $suhu,
        'kelembapan' => $kelembapan,
        'suhu_rendah' => $suhu_rendah, // Inserting a single value
        'suhu_sedang' => $suhu_sedang, // Inserting a single value
        'suhu_tinggi' => $suhu_tinggi, // Inserting a single value
        'kelembapan_rendah' => $kelembapan_rendah, // Inserting a single value
        'kelembapan_sedang' => $kelembapan_sedang, // Inserting a single value
        'kelembapan_tinggi' => $kelembapan_tinggi, // Inserting a single value
        'penyebaran_penyakit_rule1' => ($penyebaran_penyakit_rule1 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule2' => ($penyebaran_penyakit_rule2 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule3' => ($penyebaran_penyakit_rule3 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule4' => ($penyebaran_penyakit_rule4 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule5' => ($penyebaran_penyakit_rule5 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule6' => ($penyebaran_penyakit_rule6 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule7' => ($penyebaran_penyakit_rule7 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule8' => ($penyebaran_penyakit_rule8 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'penyebaran_penyakit_rule9' => ($penyebaran_penyakit_rule9 ? 'Memenuhi Rule' : 'Tidak Memenuhi Rule'),
        'a1' => (double) $a1,
        'a2' => (double) $a2,
        'a3' => (double) $a3,
        'm1' => (double) $hasil_m1,
        'm2' => (double) $hasil_m2,
        'm3' => (double) $hasil_m3,
        'titik_pusat' => round($titik_pusat, 2),
    ];
    // print_r($data);

    $where = array('id_diagnosa' => $id_diagnosa);
        $this->M_diagnosa->simpanDiagnosa($where, $data, 'diagnosa');

     
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
              <span><strong>Well done!</strong> Successful Diagnosa Penyebaran Penyakit </span>
            </div><!-- d-flex -->
          </div><!-- alert -->');
            redirect('Dashboard/hasil_diagnosa/'.$id_diagnosa,'refresh');
        
}

private function hitungNilaiMin($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin2($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin3($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin4($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin5($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin6($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin7($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin8($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}
private function hitungNilaiMin9($nilai1, $nilai2)
{
    return min($nilai1, $nilai2);
}

public function export_pdf_diagnosa($id_diagnosa)
	{
	$this->load->library('mypdfgenerator');
	$data['title'] ="Hasil Diagnosa";
	$where = array('id_diagnosa' => $id_diagnosa);
		$data['diagnosa'] = $this->M_diagnosa->show_diagnosa($where)->result(); // Menggunakan $where pada show_data
	$this->mypdfgenerator->generate('Diagnosa/print_diagnosa',$data);
	}
}