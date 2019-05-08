<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 2019-05-02
 * Time: 오전 10:55
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class topic extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){
        $data = $this->topic_model->gets();
        $this->load->view('head');
        $this->load->view('topic_list', array('topics' => $data));
        $this->load->view('main');
        $this->load->view('footer');
    }
    function get($id){
        $topics = $this->topic_model->gets();
        $topic = $this->topic_model->get($id);
        $this->load->view('head');
        $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('get', array('topic'=>$topic));
        $this->load->view('footer');
    }

}