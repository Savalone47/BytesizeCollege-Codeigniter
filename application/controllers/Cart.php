<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cart extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Cart_model','Notification_model']);
    } 

    /*
     * Listing of cart
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('cart/index?');
        $config['total_rows'] = $this->Cart_model->get_all_cart_count();
        $this->pagination->initialize($config);

        $data['cart'] = $this->Cart_model->get_all_cart($params);
        
        $data['_view'] = 'cart/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cart
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'userID' => $this->input->post('userID'),
				'moduleID' => $this->input->post('moduleID'),
				'time_stamp' => $this->input->post('time_stamp'),
            );
            
            $cart_id = $this->Cart_model->add_cart($params);
            redirect('cart/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Module_model');
			$data['all_modules'] = $this->Module_model->get_all_modules();
            
            $data['_view'] = 'cart/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a cart
     */
    function edit($cartID)
    {   
        // check if the cart exists before trying to edit it
        $data['cart'] = $this->Cart_model->get_cart($cartID);
        
        if(isset($data['cart']['cartID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'userID' => $this->input->post('userID'),
					'moduleID' => $this->input->post('moduleID'),
					'time_stamp' => $this->input->post('time_stamp'),
                );

                $this->Cart_model->update_cart($cartID,$params);            
                redirect('cart/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Module_model');
				$data['all_modules'] = $this->Module_model->get_all_modules();

                $data['_view'] = 'cart/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cart you are trying to edit does not exist.');
    } 

    /*
     * Deleting cart
     */
    function remove($cartID)
    {
        $cart = $this->Cart_model->get_cart($cartID);

        // check if the cart exists before trying to delete it
        if(isset($cart['cartID']))
        {
            $this->Cart_model->delete_cart($cartID);
            redirect('cart/index');
        }
        else
            show_error('The cart you are trying to delete does not exist.');
    }
}