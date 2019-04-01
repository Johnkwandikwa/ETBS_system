<?php 
class Schedule extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Schedule_model','mo');
    }
    public function index(){
        $data['schedules'] =$this->mo->get_schedule();
        


       $this->load->view('admintemplates/header');
        $this->load->view('schedule/index',$data);
       // $this->load->view('');

        //loading pages from view folder, else error error

    }

    public function show_schedule(){
        $result['data']=$this->Schedule_model->get_schedule();
        $this ->load->view('view',$result);
    }

    public function add_schedule(){
        $this->load->view('schedule/index');
       

        //rules for validating for only the bus ID as its unique

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
