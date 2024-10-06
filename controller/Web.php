<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Web extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        $this->load->library('porichoyapi');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
        date_default_timezone_set('Asia/Dhaka');

         $date = date('d-m-Y h:i:s A');
        // echo '<br>'. $date;
    }
  
    
    public function index()
    {  
        
        $nid_number = '599199XXXX';
        $date_of_birth = '1990-10-30';

            $result = $this->porichoyapi->verify_nid($nid_number, $date_of_birth, true);

            // Check for errors
            if (isset($result['error']) && $result['error'] === true) {
                echo 'Error: ' . $result['message'];
            } else {
                $this->load->view('nid_verification_result', ['response_data' => $result]);
            }

    }      
}
