 <?php date_default_timezone_set("Asia/Kolkata"); 
	session_start();
	$servername	= "localhost";
	$username 	= "techc1wl_ply_usr";
	$password 	= "1{IaTIGG0^c$";
	$db		= "techc1wl_poly";
	  try {
			$conn = new PDO("mysql:host=localhost;dbname=$db", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  // echo "Connected successfully"; 
		
		  }
		catch(PDOException $e)
		  {
			echo "Connection failed: " . $e->getMessage();
		  }
		  ?>
