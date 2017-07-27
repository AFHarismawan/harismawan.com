<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_portfolio');
        $this->load->model('M_message');
    }

    public function index() {
        $data['all'] = $this->M_portfolio->get_all();
        $data['img'] = $this->M_portfolio->get_img();
        $this->load->view('vHome', $data);
    }

    public function send() {
        $data = array(
            'NAME' => $this->input->post('cf_name'),
            'EMAIL' => $this->input->post('cf_email'),
            'MESSAGE' => $this->input->post('cf_message')
        );
        $this->M_message->add($data);
        echo "<script> alert('Thank you for the message. I will contact you shortly.');"
        . "window.location='/'; </script>";
    }

}
