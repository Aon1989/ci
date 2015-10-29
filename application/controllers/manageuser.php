<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

  function __construct(){
      parent::__construct();
      $this->load->model('Users_model','artist1');
    }

	function index(){

		$data['rs'] = $this->artist1->_getartist();
		$this->load->view('show_all',$data);
}

  function add()
  {
    if($this->input->post("btsave")!=null)
    {
      $adddata=array(
        "id"=>$this->input->post("id"),
        "name"=>$this->input->post("name"),
        "album"=>$this->input->post("album"),
        "type"=>$this->input->post("type"),
        "record"=>$this->input->post("record"),
        
        );
      $this->db->insert("artist",$adddata);
      redirect("manageuser","refresh");
      exit;
    }
    $this->load->view('from/add');
  }       

  function edit($id)
  {
    if($this->input->post("btsave")!=null)
    {
      $editdata=array(
         "id"=>$this->input->post("id"),
        "name"=>$this->input->post("name"),
        "album"=>$this->input->post("album"),
        "type"=>$this->input->post("type"),
        "record"=>$this->input->post("record"),
        );

      $this->db->where("id",$id);
      $this->db->update("artist",$editdata);
      redirect("manageuser","refresh");
      exit;
    }

    $sql="Select * from artist where id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0)
    {
      $data['rs']=array();
    }
    else
    {
      $data['rs']=$rs->row_array();
    }

    $this->load->view('from/edit',$data);
  }       

  function delete($id)
  {
    $this->db->delete('artist', array('id' => $id));
    redirect("manageuser","refresh");
    exit;
  }  
  function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $type = $this->input->post('type');  
        $data['rs']    =   $this->artist1->search($keyword , $type );
        $this->load->view('show_all',$data);
    }     
}
