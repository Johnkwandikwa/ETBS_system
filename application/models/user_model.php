<?php
class User_model extends CI_Model{
    public function registration($enc_password){
        $data=array(
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'nationality'=>$this->input->post('nationality'),
            'city'=>$this->input->post('city'),
            'email'=>$this->input->post('email'),
            'countrycode'=>$this->input->post('countrycode'),
            'mobilenumber'=>$this->input->post('mobilenumber'),
            'emergencyemail'=>$this->input->post('emergencyemail'),
            'countrycode2'=>$this->input->post('countrycode2'),
            'mobilenumber2'=>$this->input->post('mobilenumber2'),
             'username'=>$this->input->post('username'),
            'password'=>$enc_password
            
  
        );

        return $this->db->insert('user',$data);
    }

    // success logged in user  

    public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result=$this->db->get('user');

        if($results->num_rows()==1){
            return $result->row(0)->id;
        }else {
            return false;
        }

    }

    //username validation

    public function check_username($username){
        //running a query to check if the username exist in a current database
        $query=$this->db->get_where('user',array('username'=>$username));

        if(empty($query->row_array())){
            return true;
        } else{
            return false;
        }
    } 


    public function check_email($email){
        //running a query to check if the email exists in a current database of user
        $query=$this->db->get_where('user',array('email'=>$email));

        if(empty($query->row_array())){
            return true;
        } else{
            return false;
        }
    } 
}