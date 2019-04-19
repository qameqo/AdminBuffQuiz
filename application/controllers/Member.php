<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
		$this->load->view('Template/header');
    }
    public function get(){
        $this->load->view('Template/header');
    }
    public function save(){
        echo"save i sad";
    }
    public function update(){
        echo"update i sad";
    }
    public function delete(){
        echo"delete i sad";
    }
}
?>