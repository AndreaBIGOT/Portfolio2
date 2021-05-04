<?php
					$servername = 'localhost';
					$username = 'na3_mysql';
					$password = 'ooy4wohp';
					
					try{
						$conn = new PDO("mysql:host=$servername;dbname=na3_mysql", $username, $password);
				
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					
			
					catch(PDOException $e){
					echo "Erreur : " . $e->getMessage();
                    }
?>