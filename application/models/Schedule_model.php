<?php 
class Schedule_model extends CI_Model{


    public function __construct(){
        
        $this->load->database();
    }

    function insert_data($data){
       $this->db->insert("schedule",$data);
      }


     function fetch_data(){
        $this->db->select("*");
        $this->db->from("schedule");
        $query=$this->db->get();
        return $query;
    }

    //public function vs function

     function delete_data($Id){
        $this->db->where("Id",$Id);
        $this->db->delete("schedule");


    }

     function fetch_single_data($Id){
        $this->db->where("Id",$Id);
        $query=$this->db->get("schedule");
        return $query;
    }

    function update_data($data,$Id){
        $this->db->where("Id",$Id);
        $this->db->update("schedule",$data);
    }

}


 



