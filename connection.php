<?php

define("DB","localhost");
define("DB_ROOT","root");
define("DB_PASSWORD","");
define("DB_DATABASE","kardystudio");
defined("DB")? null :define("DB","localhost");
defined("DB_ROOT")? null :define("DB_ROOT","root");
defined("DB_PASSWORD")? null :define("DB","");
defined("DB_DATABASE")? null :define("DB","kardystudio");



// CREATING THE CLASS OBJECT 

class Database{
	
private $connection;
	
	public function __construct() {
		$this->open_connection();
		// opens  connection to the database once the class is instatiated
		
		
		}
		public function open_connection(){
		 $this->connection=mysqli_connect(DB,DB_ROOT,DB_PASSWORD,DB_DATABASE);
		 return $this->connection;
		 
		
		}
	// making  a query to the database
			public function query($sql){
				
				
			$result= mysqli_query($this->open_connection(),$sql);
			
		
				
				return $result;
				
			}
			
		// to release DATA FROM THE DATABASE 
		public function fetching_records($sql){

			$result= mysqli_fetch_assoc($sql);
			     return $result;
		}
		
		 public function cleaner ($data) 
	{
		$data =trim(mysqli_real_escape_string($this->open_connection(),$data));
		return $data;
	}
		public function read($data){
			echo $data;
		}
		
		public function close_connection (){
			return mysqli_close($this->open_connection);
		}
    
    public function comments($d){
        $d=mysqli_num_rows($d);
    
    
        return $d;
        
    }
		
	}
	
	


$database=new Database();
?>
