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
        $this->load->view('dashboards/single',$data);
    }
    function single(){
		$data = array(
			'breadcrumb'=>array(array("url"=>"/","text"=>"Dashboard"),array("url"=>"/","text"=>"Status")),
			'rowAmounts'=>array('5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25'),
            'users'=>$this->user->getFakeUsers(),
            'clients'=>array(
                array("name"=>"ABC","lead"=>"","offer"=>"","prospect"=>"1","won"=>""),
                array("name"=>"CDE","lead"=>"","offer"=>"","prospect"=>"","won"=>"1"),
                array("name"=>"DEF","lead"=>"","offer"=>"1","prospect"=>"","won"=>""),
                array("name"=>"FGH","lead"=>"","offer"=>"","prospect"=>"","won"=>"1"),
                array("name"=>"HIJ","lead"=>"1","offer"=>"","prospect"=>"","won"=>""),
            )
		);
        $this->load->view('dashboards/single',$data);
    }
}