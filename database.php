<?php

	//Connection to the MySQL server:
	$con = mysqli_connect("localhost","root","","shoutbox");

	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Pogreska prilikom spajanja na MySQL: " . mysqli_connect_error();
	}