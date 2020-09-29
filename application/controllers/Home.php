<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		$this->load->view('contect');
	}
    public function show()
    {
        $data = array(
            'adress' =>$this->input->post('address'),
            'district' =>$this->input->post('district'),
            'city' =>$this->input->post('city'),
            'province' =>$this->input->post('province'),
            'pcode' =>$this->input->post('pcode'),
            'email' =>$this->input->post('email'),
            'pnum' =>$this->input->post('pnum')
            );
            $data['show'] = $data;
            $this->load->view('home',$data);

    }
}
