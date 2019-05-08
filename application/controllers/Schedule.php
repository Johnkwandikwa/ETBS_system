<?php 
class Schedule extends CI_Controller{

    function __construct(){
        parent::__construct();
        //$this->load->model("Schedule_model");
    }
    public function index(){
        $this->load->model("Schedule_model");
        $data["fetch_data"] =$this->Schedule_model->fetch_data();
        $this->load->view('admintemplates/header');
        $this->load->view('schedule/index',$data);

    }

    public function form_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("Id","ID",'required');
        $this->form_validation->set_rules("from_dest","From_dest",'required');
        $this->form_validation->set_rules("time","Time",'required');
        $this->form_validation->set_rules("date","Date",'required');
        $this->form_validation->set_rules("busID","BusID",'required');
        $this->form_validation->set_rules("numberofseats","Numberofseats",'required');

        if($this->form_validation->run())
        {
            //if true
            $this->load->model("Schedule_model");
            $data=array(
                "Id"=>$this->input->post("Id"),
                "from_dest" =>$this->input->post("from_dest"),
                "to_dest" =>$this->input->post("to_dest"),
                "time" =>$this->input->post("time"),
                "date" =>$this->input->post("date"),
                "busID" =>$this->input->post("busID"),
                "numberofseats" =>$this->input->post("numberofseats")
            );

            //$this->Schedule_model->insert_data($data);

          //  redirect(base_url()."Schedule/inserted");

            if($this->input->post("update")){
                $this->Schedule_model->update_data($data,$this->input->post("hidden_Id"));
                redirect(base_url()."Schedule/updated");
            }

            if($this->input->post("insert")){
                $this->Schedule_model->insert_data($data);
                redirect(base_url()."Schedule/inserted");
            }


            
        }
        else {
            $this->index();
        }


    }

    public function inserted(){
        $this->index();
    }

    public function delete_data(){
        $Id=$this->uri->segment(3);
        $this->load->model("Schedule_model");
        $this->Schedule_model->delete_data($Id);
        redirect(base_url()."Schedule/deleted"); // calls a function defined below to display the page
    }

    public function deleted(){
        $this->index();
    }

    public function update_data(){
        $user_Id=$this->uri->segment(3);
        $this->load->model("Schedule_model");
        $data["user_data"]=$this->Schedule_model->fetch_single_data($user_Id);
        $data["fetch_data"]=$this->Schedule_model->fetch_data();
       // $this->load->view("Schedule/index",$data);
       $this->load->view("schedule/index",$data);
    }

    public function updated(){
        $this->index();
    }
}







































/*

    public function show_schedule(){
        $result['data']=$this->Schedule_model->get_schedule();
        $this ->load->view('view',$result);
    }

    public function add_schedule(){
        $this->load->view('schedule/index');
       



        $this->form_validation->set_rules('busID','BusID','required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('admintemplates/header');
            $this->load->view('schedule/index',$data);
            $this->load->view('templates/footer');
        }

        else{

            $this->Schedule_model->add_schedule();
            $this->load->view('Pages/home');

        }


        $this->load->view('admintemplates/header');
        $this->load->view('schedule/index',$data);
        $this->load->view('templates/footer');
    }



   
}
*/ 
