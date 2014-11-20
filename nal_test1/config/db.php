<?php
error_reporting(E_ALL);
/**
* Database class
*/
class Db
{
	
	private $host = "localhost";
	private $user = "root";
	private $pass = "root";
	private $dbName = "nal_test1";

	public $linkConnection;


	private function connect()
    {                
        $this->linkConnection = mysqli_connect($this->host, $this->user, $this->pass);
		if ($this->linkConnection->connect_errno) {
    		echo "\nFailed to connect to MySQL: (" . $this->linkConnection->connect_errno . ") " . $this->linkConnection->connect_error."\n";
		}
		mysqli_select_db($this->linkConnection, $this->dbName);
		//echo $this->mysqli->host_info . "\n";
	}
    
    private function close()
    {
        mysqli_close($this->linkConnection);
    }
   
    protected function selectOne($sqlQuery)
    {
        $this->connect();
        $result = mysqli_query($this->linkConnection, $sqlQuery) or die(mysqli_error($this->linkConnection));
        //var_dump($result);
        $rows = mysqli_fetch_assoc($result);     
        //var_dump($rows);   
        mysqli_free_result($result);      

        $this->close();
        return $rows;        
    }
    
    protected function select($sqlQuery)
    {
        $this->connect();
        $result = mysqli_query($this->linkConnection, $sqlQuery) or die(mysqli_error($this->linkConnection));
        var_dump($result);
        $rows = array();
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $rows[$i] = $row;           
            $i++; 
        }
        mysqli_free_result($result);

        $this->close();
        return $rows;        
    }
    
    protected function execute($sqlQuery)
    {
        $this->connect();
        $result = @mysqli_query($this->linkConnection, $sqlQuery);        
        //$this->getLastInsertId();

        $this->close();
        return $result;        
    }
}
