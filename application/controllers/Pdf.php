<?php

class Pdf extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Student_model']);
    }

    public function index(){

        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('exam/result',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function printStudentList(){

        $data['allStudent'] = $this->Student_model->get_all_students();
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('course/pdfstudent',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }
}