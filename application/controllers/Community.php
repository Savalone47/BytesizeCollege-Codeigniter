<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Community extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Community_model','Notification_model']);
    } 

    /*
     * Listing of community
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('community/index?');
        $config['total_rows'] = $this->Community_model->get_all_community_count();
        $this->pagination->initialize($config);

        $data['community'] = $this->Community_model->get_all_community($params);
        
        $data['_view'] = 'community/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new community
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'studentID' => $this->input->post('studentID'),
				'moduleID' => $this->input->post('moduleID'),
				'facilitatorID' => $this->input->post('facilitatorID'),
				'discussion' => $this->input->post('discussion'),
				'discussion2' => $this->input->post('discussion2'),
				'time_stamp' => $this->input->post('time_stamp'),
            );
            
            $community_id = $this->Community_model->add_community($params);
            redirect('community/index');
        }
        else
        {
			$this->load->model('Student_model');
			$data['all_students'] = $this->Student_model->get_all_students();

			$this->load->model('Module_model');
			$data['all_modules'] = $this->Module_model->get_all_modules();
            
            $data['_view'] = 'community/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a community
     */
    function edit($id)
    {   
        // check if the community exists before trying to edit it
        $data['community'] = $this->Community_model->get_community($id);
        
        if(isset($data['community']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'studentID' => $this->input->post('studentID'),
					'moduleID' => $this->input->post('moduleID'),
					'facilitatorID' => $this->input->post('facilitatorID'),
					'discussion' => $this->input->post('discussion'),
					'discussion2' => $this->input->post('discussion2'),
					'time_stamp' => $this->input->post('time_stamp'),
                );

                $this->Community_model->update_community($id,$params);            
                redirect('community/index');
            }
            else
            {
				$this->load->model('Student_model');
				$data['all_students'] = $this->Student_model->get_all_students();

				$this->load->model('Module_model');
				$data['all_modules'] = $this->Module_model->get_all_modules();

                $data['_view'] = 'community/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The community you are trying to edit does not exist.');
    } 

    /*
     * Deleting community
     */
    function remove($id)
    {
        $community = $this->Community_model->get_community($id);

        // check if the community exists before trying to delete it
        if(isset($community['id']))
        {
            $this->Community_model->delete_community($id);
            redirect('community/index');
        }
        else
            show_error('The community you are trying to delete does not exist.');
    }
}