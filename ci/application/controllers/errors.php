<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 2019-05-02
 * Time: 오후 3:08
 */

class Errors extends CI_Controller{
    public function notfound(){
        $this->load->view('head');
        $this->load->view('error/404');
        $this->load->view('footer');
    }
}