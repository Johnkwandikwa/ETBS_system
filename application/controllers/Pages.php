<?php 
class Pages extends CI_Controller{



    public function view($page='home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();   //code ignitor function to show error

        }

        //loading page header and footer

        $data['title']=ucfirst($page);

        $this->load->model("Schedule_model");
       // $data["fetch_data"] =$this->Schedule_model->fetch_data();

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');

        //loading pages from view folder, else error error

    }
}
