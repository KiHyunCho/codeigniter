<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 2019-05-02
 * Time: 오전 10:58
 */

class Topic_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function gets(){
        /*
         * @쿼리문 직접 호출
         */
         //return $this->db->query('SELECT * FROM topic')->result_array();

        /*
         * @Active Record
         * Active Record를 이용하면 표준 SQL을 이용할 수 있어서 에플리케이션을 좀 더 이식성 좋은 형태로 만들 수 있고,
         * 프로그래밍적으로 쿼리를 생성 할 수 있기 때문에 SQL 문자열을 직접 다루는 수고를 덜 수 있다.
         */
        return $this->db->get_where('topic')->result_array();
    }

    public function get($topic_id){
        return $this->db->get_where('topic', array('id'=>$topic_id))->row();
    }

}