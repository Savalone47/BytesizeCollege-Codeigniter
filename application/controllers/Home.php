<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Department_model');
    } 

    /*
     * Listing of groupdiscuss
     */
    function index()
    {
        $data['campus'] = $this->Department_model->get_all_department();
        $this->load->view('header_footer/header');
        $this->load->view('home/index',$data);
        $this->load->view('header_footer/footer');
    }
}