<?php
class Book extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model(['Book_model','Notification_model', 'Student_model']);
    }

    function index(){
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('assignment/index?');
        $config['total_rows'] = $this->Book_model->get_all_book_count();
        $this->pagination->initialize($config);

        $data['books'] = $this->Book_model->get_all_book($params);
        $this->load->view('header_footer/header_admin');
        $this->load->view('book/index',$data);
        $this->load->view('header_footer/footer_admin');
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('title_book','title','required|max_length[250]');
		$this->form_validation->set_rules('description_book','description','required|max_length[250]');

		if($this->form_validation->run())     
        {   
            $config['upload_path']= './uploads/campus/';
            $config['allowed_types']= 'pdf|doc|docx|';
            $config['max_size'] = '100000';
            $config['file_ext_tolower']   = true;
            $new_file=uniqid('book');
            $config['file_name'] = $new_file.".pdf";

            $this->load->library('upload', $config);


            if ( ! $this->upload->do_upload('file_book'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata(['error'=>$error['error']]);
                var_dump($error); die();
            }
            else{
                
                $params = array(
                    'title_book' => $this->input->post('title_book'),
                    'description_book' => $this->input->post('description_book'),
                    'file_book' => '/uploads/campus/'. $config['file_name'],
                );
                
                $department_id = $this->Book_model->add_book($params);
                redirect('book/index');
            }
        }
        else {
            $this->load->view('header_footer/header_admin');
            $this->load->view('book/add');
            $this->load->view('header_footer/footer_admin');
        }
    } 

    function viewBookUser(){
        $data['books'] = $this->Book_model->get_all_book();
        $this->load->view('header_footer/header');
        $this->load->view('book/book',$data);
        $this->load->view('header_footer/footer');
    }

    //Login to read Books
    public function auth_student(){

        $this->form_validation->set_rules('studentEmail','email','required|max_length[200]');
        $this->form_validation->set_rules('studentPassword','password','required|max_length[20]');

        if($this->form_validation->run()) {
            $studentEmail = $this->input->post('studentEmail');
            $studentPassword = $this->input->post('studentPassword');
            $student = $this->Student_model->auth_student($studentEmail,$studentPassword);

            if(count($student)>0){

                $this->session->set_userdata([
                    "id_user"=>$student[0]->studentID,
                    'name_user'=>$student[0]->studentLastName,
                    "activate_status"=>$student[0]->activeStatus,
                    'type_user'=>2,
                    'status'=>TRUE,
                ]);
                redirect('book/book');
            } else{

                $this->session->set_flashdata('messagePr', 'Invalid details');
                redirect($_SERVER['HTTP_REFERER']);
            }

        } else {
            $this->load->view('book/login','refresh');
        }
    }
}