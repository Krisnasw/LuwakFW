<?php
	/**
	* Created By LuwakDev
	*/
	class model_blog extends Application
	{
		
		function __construct()
		{
			# code...
			$db = new mysqli('localhost', 'root', '' , 'bestone');

			if ($db->connect_error) {
				# code...
				die('Koneksi Ke Database Gagal JANCOK'.$db->connect_error);
			}
		}

		function select()
	    {
	        return array("title 1","title 2","title3");
	    }
	}
?>