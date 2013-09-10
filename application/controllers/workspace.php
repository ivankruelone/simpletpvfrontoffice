<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Workspace extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!Current_User::user()) {
            redirect('welcome');
        }

    }

    public function index()
    {
        $this->load->view('main');
    }
}
