<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "WAITING LIST"
		);
		$data['count'] = $this->db->query("SELECT count(kd_masuk) FROM tbl_masuk WHERE tgl_masuk LIKE '".date('Y-m-d')."%' AND status_masuk LIKE '1' OR status_masuk LIKE '2' ")->row_array();
		$data['masuk'] = $this->db->query("SELECT * FROM tbl_masuk 
		RIGHT JOIN tbl_kendaraan ON tbl_masuk.kd_kendaraan = tbl_kendaraan.kd_kendaraan 
		WHERE status_masuk LIKE '1' or status_masuk LIKE '2' or status_masuk LIKE '3' ORDER BY tbl_masuk.kd_masuk 
		DESC LIMIT 9")->result_array();
		$data['harga'] = $this->db->query("SELECT * FROM tbl_kendaraan")->result_array();
		//die(print_r($data));
		$this->load->view('front', $data, FALSE);
	}

	public function booking() {
		$data = array(
			'title' => "WAITING LIST"
		);
		$data['count'] = $this->db->query("SELECT count(kd_masuk) FROM tbl_masuk WHERE tgl_masuk LIKE '".date('Y-m-d')."%' AND status_masuk LIKE '1' OR status_masuk LIKE '2' ")->row_array();
		$data['masuk'] = $this->db->query("SELECT * FROM tbl_masuk 
		RIGHT JOIN tbl_kendaraan ON tbl_masuk.kd_kendaraan = tbl_kendaraan.kd_kendaraan 
		WHERE status_masuk LIKE '1' or status_masuk LIKE '2' or status_masuk LIKE '3' ORDER BY tbl_masuk.kd_masuk 
		DESC LIMIT 6")->result_array();
		// die(print_r($data));
		$this->load->view('front2', $data, FALSE);
	}

	public function booking2() {
		$data = array(
			'title' => "BOOKING WASH"
		);
		$data['jenis'] = $this->db->query("SELECT * FROM tbl_kendaraan")->result_array();  //WHERE jenis_kendaraan = '1'")->result_array();
		$this->load->view('booking', $data);
	}
}
