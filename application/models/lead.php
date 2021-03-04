<?php
Class Lead extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets_(){
        $sql = 'select id,name from suspects';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),'cnt'=>$que->num_rows()
        );
    }
    function gets($segment,$offset){
        $sql = 'select a.id,a.name,a.address,b.username hunter,a.status ';
        $sql.= 'from suspects a ';
        $sql.= 'left outer join users b on b.id=a.user_id ';
        $sql.= 'order by a.createdate desc ';
        $sql.= 'limit ' . $segment . ',' . $offset;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array('res'=>$que->result());
    }
    function getsuspects(){
		$ci = & get_instance();
		$sql = "select ";
		$sql.= "a.id,client_id,a.name,a.address,a.city,a.createdate,a.sale_id,a.business_field,b.username sales, ";
		$sql.= "case "; 
		$sql.= "when a.name is null then '0'  ";
		$sql.= "when a.address is null then '0'  ";
		$sql.= "when a.city is null then '0'  ";
		$sql.= "when a.phone is null then '0'  ";
		$sql.= "else '1'  ";
		$sql.= "end iscomplete   ";
		$sql.= " ";
		$sql.= "from suspects a ";
		$sql.= "left outer join users b on b.id=a.sale_id where a.status='0' ";
//		$sql.= "and sale_id in (".$subordinates.") ";
        $sql.= "and hide='0'";
		$query = $ci->db->query($sql);
		$result = $query->result();
		return $result;
    }
    function getAmount(){
        $sql = 'select count(id)cnt from suspects where status="0" and hide="0" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array('cnt'=>$res[0]->cnt);
    }
    function getRowAmount(){
        $sql = 'select count(id) cnt from suspects ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $obj = $que->result();
        return $obj[0]->cnt;
    }
    function getPageAmount(){
        $rowamount = $this->getRowAmount();
        return ceil($rowamount/10);
    }
}