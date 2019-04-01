<?php 
class Schedule_model extends CI_Model{


    public function __construct(){
        
        $this->load->database();
    }

    public function get_schedule(){
       $query= $this->db->get('schedule');
       if($query->num_rows()>0){
           return $query ->result();

       }

       

       // $query =$this->db->query("select*from schedule");
        //return $query->result();

    }

    public function add_schedule(){

    
        $data=array(
            'from_dest' =>$this->input->post('from_dest'),
            'to_dest' =>$this->input->post('to_dest'),
            'time' =>$this->input->post('time'),
            'date' =>$this->input->post('date'),
            'bus_ID' =>$this->input->post('bus_ID'),
            'numberofseats' =>$this->input->post('numberofseats')
        );

         $this->db->insert('schedule',$data);

    }


 

}

