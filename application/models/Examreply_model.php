<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Examreply_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get examreply by id
     */
    function get_examreply($id)
    {
        return $this->db->get_where('examreply',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all examreply
     */
    function get_all_examreply()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('examreply')->result_array();
    }
        
    /*
     * function to add new examreply
     */
    function add_examreply($params)
    {
        $this->db->insert('examreply',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update examreply
     */
    function update_examreply($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('examreply',$params);
    }
    
    /*
     * function to delete examreply
     */
    function delete_examreply($id)
    {
        return $this->db->delete('examreply',array('id'=>$id));
    }
}