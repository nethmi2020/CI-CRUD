
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class processController extends CI_Controller {

	public function insert()
	{


        // print_r($_POST);
        // die();
       
        $this->form_validation->set_rules('name','Name' , 'required');
        $this->form_validation->set_rules('address','Address' , 'required');
        $this->form_validation->set_rules('phone','Phone' , 'required');

        if($this->form_validation->run()==FALSE){
         
            $this->load->view('create');
        }
        else{
            $this->load->model('studentmodel');
            $response=$this->studentmodel->insert_data();
            if($response){
    
                $this->session->set_flashdata('msg','Inserted successfully');
                redirect('processController/showData');
           
            }

        // $this->load->model('studentmodel');
        // $response=$this->studentmodel->insert_data();

	}
    }

    function showData(){
 

       $this->load->model('studentmodel');
       $data['h']=$this->studentmodel->get_data();
    //    print_r($data);
    //    die();

       if($data != false){

        
        $this->load->view('viewall.php',$data);
    }
    else{
        $this->session->set_flashdata('errmsg','wrong email and password');
        $this->load->view('viewall.php');
    }
    }

    function edit($id){

          $this->load->model('studentmodel');
       $data['h']=$this->studentmodel->edit_data($id);
    
    // print_r($data);
    // die();
            $this->load->view('edit', $data);
    }

    
    public function editInsert()
	{

        // print_r($_POST);
        // die();
          $id=$_POST['stdid'];
            $this->load->model('studentmodel');
            $response=$this->studentmodel->insert_edit_data($id);
            if($response){
    
                $this->session->set_flashdata('msg','Updated successfully');
                redirect('processController/showData');

	}
    }

    function delete($id){


        $this->load->model('studentmodel');
        $response=$this->studentmodel->delete_data($id);
        if($response){
    
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('processController/showData');

}
       
    }

}