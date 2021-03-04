<?php
Class Dashboards extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
		$data = array(
			'breadcrumb'=>array(array("url"=>"/","text"=>"Dashboard"),array("url"=>"/","text"=>"Status")),
			'rowAmounts'=>array('5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25'),
			'users'=>$this->user->getFakeUsers()
		);
        $this->load->view('dashboards/index',$data);
    }
}