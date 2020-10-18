<?php

$con="";

	class dbconnect{
		/* dbconnect class contains the functions necessary connect database to the system */
		public static function connectDb(){
			/* coonectDb function make the database connection */
			$con = mysqli_connect("localhost", "root", "","tworings") or die ("Connection error");
				}

		public static function closeDb(){
			/* closeDb function close the database connection */
			mysql_close();
		}
	}
?>
