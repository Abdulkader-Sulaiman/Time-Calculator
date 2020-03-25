<?php
// DB.class.php

class DB {
	
      protected $db_name = 'DB';
      protected $db_user = 'root';
      protected $db_pass = '12345';
      protected $db_host = 'localhost';
	
	// Open a connect to the Database.
	
	public function connect() {
	
		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
		}
		return true;
	}
}
?>