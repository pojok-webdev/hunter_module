<?php
Class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getFakeUsers(){
        return array(
            array('id'=>72,"username"=>"Ardhi"),
            array('id'=>113,"username"=>"Aris"),
            array('id'=>96,"username"=>"Dhita"),
            array('id'=>14,"username"=>"Yudi"),
        );
    }
}