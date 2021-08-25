<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller {

    private function showview($data) {
        $this->load->view('include/layout', $data);
    }
    public function index() {
        $data['content'] = 'sql-gen/range';
        $this->showview($data);
    }
}

/* End of file Main.php */
