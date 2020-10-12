<?php
	class dbconnect{
		/* dbconnect class contains the functions necessary connect database to the system */
		public static function connectDb(){
			/* coonectDb function make the database connection */
			$link = mysql_connect("localhost", "root", "") or die ("Connection error");
			$db = mysql_select_db("tworings", $link) or die ("Database error");
		}

		public static function closeDb(){
			/* closeDb function close the database connection */
			mysql_close();
		}
	}
?>
