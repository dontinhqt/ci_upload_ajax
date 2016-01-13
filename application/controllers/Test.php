<?php
// http://w3code.in/2015/10/how-to-upload-file-using-ajax-in-codeigniter/#codesyntax_2
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
	    $this->load->library('upload');
	    $this->load->helper(array('url'));
	    $this->load->view('Test');
	}
     public function fileUpload(){
		$attachment_file=$_FILES["attachment_file"];
		$output_dir = "upload/";
		$fileName = $_FILES["attachment_file"]["name"];
		move_uploaded_file($_FILES["attachment_file"]["tmp_name"],$output_dir.$fileName);
		echo "File uploaded successfully";
		print_r($_FILES);
    }
}