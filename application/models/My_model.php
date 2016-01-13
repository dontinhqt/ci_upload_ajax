<?php
class My_Model extends CI_Model {
	public function upload_image($fileName){
		if($filename!='' ){
			$filename1 = explode(',',$filename);
			foreach($filename1 as $file){
				$file_data = array(
					'filename' => $file,
  // 'datetime' => date('Y-m-d h:i:s')
					);
				$this->db->insert('files', $file_data);
			}
		}
	}
}