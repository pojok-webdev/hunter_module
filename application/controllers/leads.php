<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('lead');
	}
	public function index(){
		$data = array(
			'breadcrumb'=>array(array("url"=>"/","text"=>"Leads"),array("url"=>"/","text"=>"Table")),
			'objs'=>$this->lead->getsuspects(),
			'rowAmounts'=>array('5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25'),
		);
		$this->load->view('leads/index',$data);
	}
	function getamount(){
        echo json_encode($this->lead->getAmount());
    }
    function ajaxsource(){
        $params = $this->input->post();
        $objs = $this->lead->gets($params['segment'],$params['offset']);
        $arr = array();
        echo json_encode($objs['res']);
    }
    function lastpage(){
        $lastpage = $this->lead->getPageAmount();
        echo '{"lastpage":'.$lastpage.'}';
    }

}
