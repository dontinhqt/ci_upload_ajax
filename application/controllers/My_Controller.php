<?php
class My_Controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('upload');
    $this->load->helper(array('url'));

  }
  public function index(){
      $this->load->view('uploadFile');
  }
  public function file_upload(){
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {
      $_FILES['userfile']['name']= $files['userfile']['name'][$i];
      $_FILES['userfile']['type']= $files['userfile']['type'][$i];
      $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
      $_FILES['userfile']['error']= $files['userfile']['error'][$i];
      $_FILES['userfile']['size']= $files['userfile']['size'][$i];
      $this->upload->initialize($this->set_upload_options());
      $this->upload->do_upload();
      $fileName = $_FILES['userfile']['name'];
      $images[] = $fileName;
    }
    $fileName = implode(',',$images);
    $this->load->model("My_model");
    $this->my_model->upload_image($fileName);
  }
  private function set_upload_options()
  { 
  // upload an image options
   $config = array();
         $config['upload_path'] = './upload/'; //give the path to upload the image in folder
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '0';
         $config['overwrite'] = FALSE;
         return $config;
       }
     }