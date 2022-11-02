<?php

class studentmodel extends CI_Model{
   
    function insert_data(){

        $data = array(
 
         
         'name'=>$this->input->post('name',TRUE),
         'address'=>$this->input->post('address',TRUE),
         'phone'=>$this->input->post('phone',TRUE),
 
        );
 
       return $this->db->insert('student', $data);
     //   return false;
 
     }


     function get_data(){

      $query=$this->db->get("student");
      return $query->result();
     }

     

     function edit_data($id){

      

      $this->db->from("student");
      $this->db->where('stdid', $id);
      $q = $this->db->get();
      return $q->result();
     }


     function insert_edit_data($id){

      $data = array(
 
         
        'name'=>$this->input->post('name',TRUE),
        'address'=>$this->input->post('address',TRUE),
        'phone'=>$this->input->post('phone',TRUE),

       );

      $this->db->from("student");
      $this->db->where('stdid', $id);
      return $this->db->update('student', $data);

     }



    

     
     function delete_data($id){

     
      $this->db->from("student");
      $this->db->where('stdid', $id);
      return  $this->db->delete('student');

     }
}