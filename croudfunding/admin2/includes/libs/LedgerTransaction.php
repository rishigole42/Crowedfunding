<?php

class LedgerTransaction {
	
	public  $credit = "credit";
	public  $debit = "debit";
	public  $NullUser = NULL;
	public  $NullCollection = NULL;
	public  $TRANSACTION_ENTRY = 0;
	public  $TRANSACTION_TRANSFER = 1;
	public $db;
	
	function __construct($db) {
		
		$this->db = $db;
	}
	
	function showEntriesUser($user,$collection)
	{
		if($user==NULL && $collection!=NULL)
		return $this->db->select("UserLeadgerDetails","*",array("CollectionName"=>$collection));
		if($user!=NULL && $collection==NULL)
		return $this->db->select("UserLeadgerDetails","*",array("username"=>$user));
		if($user==NULL && $collection==NULL)
		return $this->db->select("UserLeadgerDetails","*");
		
		return $this->db->select("UserLeadgerDetails","*",array("username"=>$user,"CollectionName"=>$collection));
	}
	
	function showEntriesCollection($user,$collection)
	{
		if($user==NULL && $collection!=NULL)
		return $this->db->select("Collectionledgerdetails","*",array("CollectionName"=>$collection));
		if($user!=NULL && $collection==NULL)
		return $this->db->select("Collectionledgerdetails","*",array("username"=>$user));
		if($user==NULL && $collection==NULL)
		return $this->db->select("Collectionledgerdetails","*");
		
		return $this->db->select("Collectionledgerdetails","*",array("username"=>$user,"CollectionName"=>$collection));
	}
	
	function feedEntry($user,$collection,$CrDr,$amount,$date,$transactionType,$shareper,$remark)
	{
		
		if($user==NULL || $user=="" || $collection==NULL || $collection =="")
		return "user or collection cannot be null";
		
		$ActualCoins = (($amount*100)/$shareper);
		$crdr = "";
		if($CrDr==$this->credit){
			$ActualCoins = $ActualCoins*1;
			$crdr = $this->credit;
		}else{
			$ActualCoins = $ActualCoins*-1;
			$crdr = $this->debit;
		}
		
		
		switch($transactionType)
		{
			case $this->TRANSACTION_TRANSFER:
				$collection = "VIRTUAL_TRANSFER_COLLECTION";
			break;	
		}
		
		
		
		return $this->db->insert("ledgerdetails",array("UserName"=>$user,"CollectionName"=>$collection,"crdr"=>$crdr,"Amount"=>$amount,"datetime"=>$date,"tansactiontype"=>$transactionType,"SharePer"=>$shareper,"ActualCoins"=>$ActualCoins,"Remark"=>$remark,));
		
	}
	
	
	
	
}

?>