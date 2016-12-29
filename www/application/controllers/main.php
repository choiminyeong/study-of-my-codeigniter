<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
* todo 컨트롤러
*/

  class Main extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->model('todo_m');
      $this->load->helper('url');
    }
  
/*
* 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드
*/
    public function index(){
      $this->lists();
    }
    /*
    * todo 목록
    */
    public function lists(){
      $data['list'] = $this->todo_m->get_list();
      $this->load->view('todo/list_v', $data);
    }
  /*
  * todo 조회
  */
    function view(){
      // todo번호에 해당하는 데이터 가져오기
      $id = $this->url->segment(3);
      $data['views']=$this->todo_m->get_view($id);

      // view 호출

      $this->load->view('todo/view_v', $data);
    }
  }
 ?>
