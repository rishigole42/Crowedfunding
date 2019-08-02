<?php

class LinkManager {
	public $db;
	function __construct($db) {
		
		$this->db = $db;
	}
	
	function getLinks($access)
	{
		//varprint($access);
		if($access=="*")
		$data = $this->db->select("linkmanager","*",array("ismainmenu"=>"YES",'status'=>'ACTIVE','scope'=>"mainsite"));
		else
		{
						$access = explode(",",$access);
			//varPrint($access);
			$in  = str_repeat('?,', count($access) - 1) . '?';
			//varPrint($in);
			$data = $this->db->query("Select * from linkmanager where sno in ($in)",$access,TRUE);	
		}
		
		
		$menu_group = array();
		$menu = array();
		foreach($data as $dat)
		{
			$menu_group[] = $dat->linkgroup;	
		}


		$menu_group = array_unique($menu_group);
		foreach($menu_group as $mg)
		{
		//	varPrint($mg);
			$menu[$mg]['menugroup'] = $mg;
			foreach($data as $dat)
			{
				
				if($dat->linkgroup==$mg)
				{$menu[$mg]['data'][] = $dat;}
			}	
		}

		
		return $menu;

	}

	function getLinksbyUser($userId)
	{
		//varprint($access);
		
		$this->db->select("allusers","*",array("userid"=>$userId));
		
		
		if($access=="*")
		$data = $this->db->select("linkmanager","*",array("ismainmenu"=>"YES",'status'=>'ACTIVE','scope'=>"mainsite"));
		else
		{
		
			$in  = str_repeat('?,', count($userId) - 1) . '?';
			$data = $this->db->query("Select * from linkmanager where sno in ($in)",array($access));	
		}
		
		
		$menu_group = array();
		$menu = array();
		foreach($data as $dat)
		{
			$menu_group[] = $dat->linkgroup;	
		}


		$menu_group = array_unique($menu_group);
		foreach($menu_group as $mg)
		{
		//	varPrint($mg);
			$menu[$mg]['menugroup'] = $mg;
			foreach($data as $dat)
			{
				
				if($dat->linkgroup==$mg)
				{$menu[$mg]['data'][] = $dat;}
			}	
		}

		
		return $menu;

	}
	
}

?>