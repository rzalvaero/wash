<?php

/* Model Main */

class Main_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function input_data($data,$table){
	   $this->db->insert($table, $data);
	   return $this->db->insert_id();
	}

	function tampil_data(){
		return $this->db->get('tproject');
	}
	
	
	function tampil_data2(){
		$use = $this->session->userdata('sesid');
		$id = $this->db->get('tproject')->result(); //ini kan nampilin banyak data...
		$query = $this->db->query("SELECT tp.id, tp.siteid, tp.sitename, tp.location, tp.address, tp.client, tp.status, tp.division
		FROM tproject tp
		Left JOIN tproject_pic pi on pi.pid = tp.id
		LEFT JOIN tuser us on us.id = pi.uid
		WHERE pi.uid= '$use'" );
		return $query->result();
	}
	
	function tampil_note(){
		$use = $this->session->userdata('sesid');
		$id = $this->db->get('tnote')->result(); //ini kan nampilin banyak data...
		$query = $this->db->query("SELECT tn.id, tn.uid, tn.pid, tn.title, tn.desciption, tn.status
		FROM tnote tn
		Left JOIN tproject tp on tp.id = tn.id
		LEFT JOIN tuser us on us.id = tn.uid
		WHERE tn.uid='$use'" );
		return $query->result();
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function GetRow($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like('client', $keyword);
        return $this->db->get('tproject')->result_array();
    }
	
	function get_datas($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function get_data($id,$table){
     $query = $this->db->query("SELECT * FROM tproject_me join tproject on tproject.id=tproject_me.project_id where tproject.id='$id'");
	 return $query->result();	  
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function check_site($siteid){
	   $this->db->where('siteid',$siteid);		
	  // $query =$this->db->get('tproject');
	  // $row = $query->row();
	  // if ($query->num_rows > 1){
	  //		 return $row->siteid; 
	  //  }else{
	  //		 return "";
	  //}
	  //$query = $this->db->query("select siteid from tproject where siteid=".$siteid);
	  //	if ($query->num_rows() > 0 ){
	  //	echo "i got one";
	  //	return true;
	  //	}
	  //	else{
	  //	echo "i got nothing";
	  //	return false;
	  //	}
	}
	
	//untuk menconvert waktu dalam indonesia
	function time_convert($timestamp, $timezone = 'UP7'){
    $datetime = new DateTime($timestamp, new DateTimeZone($timezone));
    return $datetime->format('l Y/m/d H:i');
 }

	function get_slide_home()
	{
		$this->db->order_by('slide_sort','ASC');
		$query = $this->db->get('slide');

		return $query->result();
	}

	function get_all($table)
	{
		$query = $this->db->get($table);

		return $query;
	}

	function get_list_all($table)
	{
		$query = $this->db->get($table);

		return $query->result();
	}

	function get_list($table, $limit = null, $sort = null)
	{
		if($limit != null) {
			$this->db->limit($limit['perpage'],$limit['offset']);
		}
		if($sort != null) {
			$this->db->order_by($sort['by'],$sort['sorting']);
		}
		$query = $this->db->get($table);

		return $query;
	}

	function get_list_where($table, $where = array(), $limit = null, $sort = null)
	{
		$this->db->where($where);
		if($limit != null) {
			$this->db->limit($limit['perpage'],$limit['offset']);
		}
		if($sort != null) {
			$this->db->order_by($sort['by'],$sort['sorting']);
		}
		$query = $this->db->get($table);

		return $query;
	}

	function get_list_where_in($table,$field, $where = array(), $limit = null, $sort = null)
	{
		$this->db->where_in($field,$where);

		if($limit != null) {
			$this->db->limit($limit['perpage'],$limit['offset']);
		}
		if($sort != null) {
			$this->db->order_by($sort['by'],$sort['sorting']);
		}
		$query = $this->db->get($table);

		return $query;
	}

	function get_list_where_total($table, $field, $value)
	{
		$this->db->where($field,$value);
		$query = $this->db->get($table);

		return $query->num_rows();
	}

	function get_join_where($table,$table_join,$where_join, $where = array())
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_join,$where_join);
		$this->db->where($where);

		return $this->db->get();
	}

	function get_list_by_archive($table,$field,$value,$limit = array())
	{
		$query_clause = "SELECT * FROM $table WHERE DATE_FORMAT($field, '%M-%Y') = '$value' ORDER BY id DESC LIMIT $limit[offset], $limit[perpage]  ";
		$query = $this->db->query($query_clause);

		return $query->result();
	}

	function get_list_by_archive_total($table,$field,$value)
	{
		$query_clause = "SELECT * FROM $table WHERE DATE_FORMAT($field, '%M-%Y') = '$value' ";
		$query = $this->db->query($query_clause);

		return $query->num_rows();
	}

	function get_detail($table,$where = array())
	{
		$this->db->where($where);
		$query = $this->db->get($table);

		return $query->row_array();
	}

	function get_detail_total($table,$where = array())
	{
		$this->db->where($where);
		$query = $this->db->get($table);

		return $query->num_rows();
	}

	function get_archive_year($table,$field)
	{
		$query_clause = "SELECT DISTINCT DATE_FORMAT($field,'%Y') AS year FROM $table ORDER BY id DESC";
		$query = $this->db->query($query_clause);

		return $query->result();
	}

	function get_archive_month($table,$field,$year)
	{
		$query_clause = "SELECT DISTINCT DATE_FORMAT($field, '%M') AS month FROM $table WHERE DATE_FORMAT($field, '%Y') = '$year' ORDER BY id DESC";
		$query = $this->db->query($query_clause);

		return $query;
	}

	function get_archive_day($table,$field,$day)
	{
		$query_clause = "SELECT * FROM $table WHERE DATE_FORMAT($field, '%Y-%m-%d') = '$day' ORDER BY id DESC";
		$query = $this->db->query($query_clause);

		return $query;
	}

	function search_product($lang,$q)
	{
		$product_description = "product_description_".$lang;
		$this->db->like('product_name',$q);
		$this->db->or_like($product_description,$q);

		$query = $this->db->get('product');

		return $query;
	}

	function search_news($lang,$q)
	{
		$news_title = "news_title_".$lang;
		$news_content = "news_content_".$lang;

		$this->db->like($news_title,$q);
		$this->db->or_like($news_content,$q);

		$query = $this->db->get('news');

		return $query;
	}

	function check_user($username = "",$password = "")
	{
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

		$query = $this->db->get_where($this->table,array('user_name' => $username));

		$result = $query->row_array();

		$this->user_password = $result['user_pass'];

		$this->user_password = $this->encrypt->decode($this->user_password);

		if(($query->num_rows() > 0 ) AND ($password === $this->user_password))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	 public function dd_wilayah(){
	 $this->db->select('*');
	 $this->db->from('tproject');
	 $query = $this->db->get();
	 return $query->result();
	}
	
	public function dd_pic(){
	 $this->db->select('*');
	 $this->db->from('tuser');
	 $query = $this->db->get();
	 return $query->result();
	}
	
	 public function dd_project(){
	 $this->db->select('*');
	 $this->db->from('tproject');
	 $query = $this->db->get();
	 return $query->result();
	}
	
	
	 public function dd_lokasi(){
	 $this->db->select('*');
	 $this->db->from('tprovince');
	 $query = $this->db->get();
	 return $query->result();
	}
	
	
     public function dd_client(){
	 $this->db->select('*');
	 $this->db->from('tclient');
	 $query = $this->db->get();
	 return $query->result();
	  //$sql = "SELECT * FROM tclient";
      //$result = $this->db->query($sql);
	  //return $result;
	}
	
     public function dropdown_jenis()
    {
    	$value[''] ='-- Choose Jenis Project --';
    	$value['ME'] ='ME';
    	$value['CME'] ='CME';
    	$value['SITAC'] ='SITAC';
		$value['IT'] ='IT';
		$value['IT'] ='IT';
    	return $value;
    }

        public function get_kontenclient($uid)
    {
    	$this->db->where("id",$uid);
        return $this->db->get("tproject");;
    }

	    public function get_kontenjenis($uid)
    {
    	$this->db->where("id",$uid);
        return $this->db->get("tproject");;
    }
	
	  public function get_project(){
	  return $this->db->get("tproject");
	 }
	
	public function save_log($param)
    {
        $sql        = $this->db->insert_string('tlogapp',$param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
	
	function chartclients() {
      $sql = "SELECT client AS hasil, COUNT(*) total FROM tproject GROUP BY hasil ";
      return $this->db->query($sql);
	}

	function chartstatus() {
      $sql = "SELECT status AS hasil, COUNT(*) total FROM tproject GROUP BY hasil ";
      return $this->db->query($sql);
	}
	
	function barstatus() {
      $sql = "SELECT status AS hasil, COUNT(*) total FROM tproject GROUP BY hasil ";
      return $this->db->query($sql);
	}
	
}
