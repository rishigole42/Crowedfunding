<?php
class database {
	
	private $config,$db,$orderBy="",$limit="";
	function __construct() {
		include("config.php");
		$this->config = $config['database'];
		//var_dump($this->config['database']);
		$this->switchDatabase($this->config['database']);
		
		
		//varPrint(Env);
		
		
		
	}
	
	function switchDatabase($dbname)
	{
		
		try{
			
			$dsn = "mysql:dbname=$dbname;host=".$this->config['host'].";charset=utf8";
		//var_dump($dsn);
			$this->db = new PDO($dsn,$this->config['username'],$this->config['password'],$this->config['option']);
		} catch (PDOException $ex) {
			
			varPrint($ex);
			
		}
	}
	
	
	function insert($table,$parameters)
	{
			try{
				
				$columns = array_keys($parameters);
				$colums_l = implode(',',$columns);
				
				$colums = preg_filter('/^/', ':', $columns);
				$colums_r = implode(',',$colums);
				//var_dump($colums_r);
				$statement = $this->db->prepare("Insert into $table ($colums_l) values ($colums_r) ");
				$statement->execute($parameters);
				
				if($statement)
				{
					
					
					return $this->db->lastInsertId();	
				}
				 
				 return FALSE;
				
			} catch (PDOException $ex) {
				
				varPrint($ex);
				varPrint($statement);
				
			}
	}
	function update($table,$parameters,$where,$AndOrClause = 'AND')
	{
		//var_dump($where);
		try{
				
				$colums = array_keys($parameters);
				$colums_l = $colums;
				
				$colums = preg_filter('/^/', ':', $colums);
				
				$column_r = array();
				foreach($colums_l as $key=>$cl)
				$column_r[] = $colums_l[$key]." = ".$colums[$key];
				
				$column_r = implode(',',$column_r);
				
				//var_dump($column_r);
				
				$colums = array_keys($where);
				$colums_l = $colums;
				
				$colums = preg_filter('/^/', ':', $colums);
				
				$wheres = array();
				foreach($colums_l as $key=>$cl)
				$wheres[] = $colums_l[$key]." = ".$colums[$key];
				//var_dump($wheres);
				$wheres  = implode(' '.$AndOrClause.' ',$wheres);
				
				//var_dump($where);
				$parameters  =array_merge($parameters,$where);
				$statement = $this->db->prepare("update $table set $column_r where $wheres ");
				$statement->execute($parameters);
				//varPrint($statement);
			} catch (PDOException $ex) {
				
				varPrint($ex);
				varPrint($statement);
				
			}
		
	}
	function delete($table,$where)
	{
		
				try{
				
				
				$colums = array_keys($parameters);
				$colums_l = $colums;
				
				$colums = preg_filter('/^/', ':', $columns);
				
				$where = array();
				foreach($colums_l as $key=>$cl)
				$where[] = $colums_l[$key]." = ".$colums[$key];
				
				$where  = implode(' '.$AndOrClause.' ',$where);
				
				
				
				$statement = $this->db->prepare("delete from $table  where $where ");
				$this->db->exec($parameters);
			} catch (PDOException $ex) {
				
				varPrint($ex);
				varPrint($statement);
				
			}

		
	}
	
	function orderBy($col,$order)
	{
		$this->orderBy = "order by $col $order";
	}
	function limit($startPoint,$upto)
	{
		$this->limit = " limit $startPoint , $upto";
	}
	function select($table,$col,$where=NULL,$AndOrClause="AND")
	{
		
		try{
				
				
				$parameter = $where;
				if(!@$where)goto d;
				$colums = array_keys($where);
				//var_dump($colums);
				//var_dump($where);
				$colums_l = $colums;
				
				$colums = preg_filter('/^/', ':', $colums);
				//var_dump($colums);
				$where = array();
				foreach($colums_l as $key=>$cl)
				$where[] = $colums_l[$key]." = ".$colums[$key];
				
				$where  = implode(' '.$AndOrClause.' ',$where);
				$where = "where ".$where;
				d:
				//var_dump($where);
				
				$statement = $this->db->prepare("select $col from $table   $where ".$this->orderBy."".$this->limit);
				$bool = $statement->execute($parameter);
				$result = array();
				if($bool)
				{
					while($row = $statement->fetchObject())	
					$result[] = $row;
					return $result;
				}
				
				return FALSE;
			} catch (PDOException $ex) {
				
				varPrint($ex);
				varPrint($statement);
				
			}
		
	}
	
	
	function query($sql,$array,$isSelect=FALSE,$debug=FALSE)
	{
		$bool = $isSelect;
		try{
			
		
			$statement = $this->db->prepare($sql);
			$statement->execute($array);
			//varPrint($array);
			$result = array();
			
			if($debug)
			{
				varPrint($statement);	
				varPrint($bool);	
				varPrint($array);	
			}
			
			
					
			if($bool)
			{
				while($row = $statement->fetchObject())	
				{
					$result[] = $row;
					//varPrint($row);	
				}
				
				
				return $result;
			}
		
			return FALSE;
		}
	
	catch (PDOException $ex) {
				
				varPrint($ex);
				varPrint($statement);
				
			}
	}
	
	function reinit()
	{
		$this->orderBy = "";
		$this->limit = "";
	}	
	
	function begin()
	{
		$this->db->beginTransaction();
	}
	
	function commit()
	{
		$this->db->commit();
	}
	function rollback()
	{
		$this->db->rollBack();
		
	}
	
}

?>