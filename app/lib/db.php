<?php
 
 class LocalDB {

 	public $settings;
 	private $dbConn;

 	/**
	*	Constructor function for local database class. This handles
	*	interacting with a local database
	*	@param array $dbSettings 
 	*/
 	public function __construct($dbSettings) {
 		$this->settings = (object) $dbSettings;
 		//try to make connection with database
		$this->dbConn = mysqli_connect($dbSettings['server'], $dbSettings['user'], $dbSettings['dbpassword']);

		if(!$this->dbConn)
		{
		  die('Could not connect: ' . mysql_error());
		}	

		mysqli_select_db($this->dbConn,$this->settings->dbname);
 	}


 	public function doQuery($queryString) {
		
		$result = $this->dbConn->query($queryString);

		if(!$result = $this->dbConn->query($queryString)){
			//if there's an error, return false
		    return false;
		} else {
			//return the entire result object back to calling function for processing
			return $result;
		}	

 	}

 }





$conn = mysqli_connect($dbSettings['server'], $dbSettings['user'], $dbSettings['password']);

if(!$conn)
{
  die('Could not connect: ' . mysql_error());
}	

mysqli_select_db($conn,$dbSettings['dbName']);


function doQuery($queryString) {
	
	global $conn;
	
	$result = $conn->query($queryString);

	if(!$result = $conn->query($queryString)){
		//if there's an error, return false
	    return false;
	} else {
		//return the entire result object back to calling function for processing
		return $result;
	}		
	
}
*/



       
?>
