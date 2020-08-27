<?php

	if (isset($_POST["btsubmit"])) {
		extract($_POST);
header("location:contact.htm");
	}
	
	else	if (isset($_POST["acheter"])) {
		extract($_POST);
		header("location:achat.htm");
	}
	
	else	if (isset($_POST["louer"])) {
		extract($_POST);
		header("location:location.htm");
	}
	
	else	if (isset($_POST["vendre"])) {
		extract($_POST);
		header("location:vente.htm");
	}
	
		?>
	
