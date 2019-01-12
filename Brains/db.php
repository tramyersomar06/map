<?php

class Database{
	
	function connection(){
		return new mysqli('localhost', 'root', '', 'ldrrm_db');
			
	}

}

?>