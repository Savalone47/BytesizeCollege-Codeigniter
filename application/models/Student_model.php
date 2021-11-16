<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Student_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get student by studentID
     */
    function get_student($studentID)
    {
        return $this->db->get_where('students',array('studentID'=>$studentID))->result_array();
    }
    
    /*
     * Get all students count
     */
    function get_all_students_count()
    {
        $this->db->from('students');
        return $this->db->count_all_results();
    }


    function actived_student($id_student){


        $this->db->where('studentID',$id_student);
        return $this->db->update('students',['activeStatus'=>1]);
       
    }


    function auth_student($email,$password) {
		
		$this->db->where(['studentEmail'=>$email,'studentPassword'=>$password]);
		return $this->db->get('students')->result();
	}
      
    

    function get_student_where_number($number){

        $this->db->where(['studentPassword'=>$number]);
		return $this->db->get('students')->result_array();
    }
    /*
     * Get all students
     */
    function get_all_students($params = array())
    {
       
        return $this->db->get('students')->result_array();
    }
        
    /*
     * function to add new student
     */
    function add_student($params)
    {
        $this->db->insert('students',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update student
     */
    function update_student($studentID,$params)
    {
        $this->db->where('studentID',$studentID);
        return $this->db->update('students',$params);
    }
    
    /*
     * function to delete student
     */
    function delete_student($studentID)
    {
        return $this->db->delete('students',array('studentID'=>$studentID));
    }

    public function download($studentID){
        return $this->db->get_where("students",array("studentID"=>$studentID))->result_array();
    }



}