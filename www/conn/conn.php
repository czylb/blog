<?php
class opmysql{
	private $host = 'localhost';			
	private $name = 'root';					
	private $pwd = '222333hh';				
	private $dBase = 'data';			
	private $conn = '';						
	private $result = '';				
	private $msg = '';					
	private $fields;						
	private $fieldsNum = 0;				
	private $rowsNum = 0;				
	private $rowsRst = '';					
	private $filesArray = array();			
	private $rowsArray = array();			
	
	function __construct($host='',$name='',$pwd='',$dBase=''){
		if($host != '')
			$this->host = $host;
		if($name != '')
			$this->name = $name;
		if($pwd != '')
			$this->pwd = $pwd;
		if($dBase != '')
			$this->dBase = $dBase;
		$this->init_conn();
	}

	function init_conn(){
		$this->conn=@mysql_connect($this->host,$this->name,$this->pwd);
		@mysql_select_db($this->dBase,$this->conn);
		mysql_query("set names UTF8");
	}
	
	function mysql_query_rst($sql){
		if($this->conn == ''){
			$this->init_conn();
		}
		$this->result = @mysql_query($sql,$this->conn);
	}

	function getFieldsNum($sql){
		$this->mysql_query_rst($sql);
		$this->fieldsNum = @mysql_num_fields($this->result);
	}

	function getRowsNum($sql){
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			return @mysql_num_rows($this->result);
		}else{
			return '';
		}	
	}

	function getRowsRst($sql){
		$this->mysql_query_rst($sql);
		if(mysql_error() == 0){
			$this->rowsRst = mysql_fetch_array($this->result,MYSQL_ASSOC);
			return $this->rowsRst;
		}else{
			return '';
		}
	}

	function getRowsArray($sql){
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			while($row = mysql_fetch_array($this->result,MYSQL_ASSOC)) {
				$this->rowsArray[] = $row;
			}
			return $this->rowsArray;
		}else{
			return '';
		}
	}
	
	function uidRst($sql){
		if($this->conn == ''){
			$this->init_conn();
		}
		@mysql_query($sql);
		$this->rowsNum = @mysql_affected_rows();
		if(mysql_errno() == 0){
			return $this->rowsNum;
		}else{
			return '';
		}
	}
	
	function getFields($sql,$fields){
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0){
			if(mysql_num_rows($this->result) > 0){
				$tmpfld = @mysql_fetch_row($this->result);
				$this->fields = $tmpfld[$fields];
				
			}
			return $this->fields;
		}else{
			return '';
		}
	}
	

	function msg_error(){
		if(mysql_errno() != 0) {
			$this->msg = mysql_error();
		}
		return $this->msg;
	}

	function close_rst(){
		mysql_free_result($this->result);
		$this->msg = '';
		$this->fieldsNum = 0;
		$this->rowsNum = 0;
		$this->filesArray = '';
		$this->rowsArray = '';
	}

	function close_conn(){
		$this->close_rst();
		mysql_close($this->conn);
		$this->conn = '';
	}
}
$conne = new opmysql();
?>