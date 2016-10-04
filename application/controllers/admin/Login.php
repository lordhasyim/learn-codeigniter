<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Hasyim
 * Date: 04/10/2016
 * Time: 17.22
 */
Class Login extends CI_Controller {
    public function index(){
        $data = array('title'=>'Login Administrator',
                        'isi'=>'admin/login_view');
        $this->load->view('admin/login_view', $data);
    }
}
