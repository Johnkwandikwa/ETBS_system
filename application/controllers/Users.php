<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

    // a construct method will execute code when new object in class is created
 public function registration(){
            $data['title'] ='Signup';

            $this->form_validation->set_rules('firstname','FirstName','required');
            $this->form_validation->set_rules('lastname','LastName','required');
            $this->form_validation->set_rules('mobilenumber','MobileNumber','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_rules('email','Email','required |callback_check_email');
            $this->form_validation->set_rules('username','UserName','required |callback_check_username');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('password2','Confirm Password','matches[password]');


            if($this->form_validation->run()===False){
                $this->load->view('templates/header');
                $this->load->view('users/registration',$data);
                $this->load->view('templates/footer');
            } else{

                //password encrption by creating a new fn with md5 as php function

                $enc_password=md5($this->input->post('password'));

               // $this->user_model->registration($enc_password);
               
                $this->user_model->registration($enc_password);

                $this->session->set_flashdata('user_registered','You have successfully been');

                redirect('Pages');
                
            }

        }


        //login function 


        public function login(){
            $data['title'] ='Sign in';

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
           


            if($this->form_validation->run()===False){
                $this->load->view('templates/header');
                $this->load->view('users/login',$data);
                
            } else{

               

                //when everything is true 
                $username =$this->input->post('username');

                $password=md5($this->input->pages('password'));

                $user_id=$this->user_model->login($username,$password);

                if($user_id){
                    $user_data =array(
                        'user_id'=>$user_id,
                        'username'=>$username,
                        'user_logged_in'=>true);

                        $this->session->set_userdata($user_data);

                 
                $this->session->set_flashdata('user_logged_in','You have successfully login');

                redirect('Pages/home');
                } else{
                    
                $this->session->set_flashdata('login_failed',' login attempt failed');

                redirect('users/login');
                }

                
            }
        }






        //username validation 
        function check_username($username){
            $this->form_validation->set_message('check_username','Username exists. Try another one');
            if($this->user_model->check_username($username)){
                return true;
            } else{
                return false;
            }
        }


         //email validation 
         function check_email($email){
            $this->form_validation->set_message('check_email','Email exists. Try another one');
            if($this->user_model->check_email($email)){
                return true;
            } else{
                return false;
            }
        }


    


    }

    