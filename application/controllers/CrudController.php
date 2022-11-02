
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

	public function index()
	{
        redirect('processController/showData');
		
	}

    function create(){
        $this->load->view('create.php');
    }


    function edit(){
        $this->load->view('edit.php');

    }

    function delete(){

    }
}