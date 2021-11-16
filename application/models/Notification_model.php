<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Notification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get notification by id
     */
    function get_notification($id)
    {
        return $this->db->get_where('notification',array('id'=>$id))->result_array();
    }

    function get_notifications($ID)
    {
        return $this->db->get_where('notification',array('id'=>$ID))->row_array();
    }
        
    /*
     * Get all notification
     */
    function get_all_notification()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('notification')->result_array();
    }

    /*
     * Get all courses count
     */
    function get_all_notification_count()
    {
        $this->db->from('notification');
        return $this->db->count_all_results();
    }
        
    /*
     * function to add new notification
     */
    function add_notification($params)
    {
        $this->db->insert('notification',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update notification
     */
    function update_notification($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('notification',$params);
    }
    
    /*
     * function to delete notification
     */
    function delete_notification($id)
    {
        return $this->db->delete('notification',array('id'=>$id));
    }
}