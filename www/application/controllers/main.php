<?php if(!defined('BASEPAHT')) exit('No direct scrpit access allowed');
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
  }

 ?>
