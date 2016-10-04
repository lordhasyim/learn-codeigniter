<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Hasyim
 * Date: 04/10/2016
 * Time: 15.27
 */

class Home extends CI_Controller {
    public function index(){
        $data = array('title'=>'Tutorial CI',
                        'isi'=>'home/index_home');
        $this->load->view('layout/wrapper', $data);
    }
}
