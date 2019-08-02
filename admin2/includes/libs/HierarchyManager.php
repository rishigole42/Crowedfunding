<?php
class HierachyManager {
	
	public $USER=1;
	public $SUPERAGENT=2;
	public $AGENT=3;
	public $SUBAGENT=4;
	public $CLIENT=5;
	public $ALL=-1;
	private $db;
	function __construct($db) {
		$this->db = $db;
	}

	function getHierachy($userid,$order_id=-1)
	{
		if($order_id==$this->ALL)
		return $this->db->select("allusers","*",array("parent_id"=>$userid));
		else
		return $this->db->select("allusers","*",array("parent_id"=>$userid,"parent_order"=>$order_id));
		
	}

}
?>