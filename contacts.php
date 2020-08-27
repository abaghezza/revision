<?php
if(isset(["ajouter"])) {
	extract($_POST);
}
?>	
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
	<h1>Contacts</h1>
   
    <table>
        <thead>
			<tr>
   
				<th> Prenom</th>
				<th>Nom</th>
				<th>Adresse</th>
				</tr>
		</thead>
		
    </table>
    
	<div><h2>Ajouter un client<</h2>
	
	<form method="post">
            <input type='hidden' name='cli_id' id='cli_id' value='<?= $cli_id ?>'>
			<p>
			                <label for='cli_prenom'>cli_prenom</label>
                <input type='text' name='cli_prenom' id='cli_prenom' required value='<?= htmlentities($cli_nom,ENT_QUOTES,"utf-8") ?>'></p>
            <p>
                <label for='cli_nom'>cli_nom</label>
                <input type='text' name='cli_nom' id='cli_nom' required value='<?= htmlentities($cli_nom,ENT_QUOTES,"utf-8") ?>'>
				</p>
				<p><label for='cli_adresse'>cli_adresse</label>
                <input type='text' name='cli_adresse' id='cli_adresse' required value='<?= htmlentities($cli_adresse,ENT_QUOTES,"utf-8") ?>'></p>
				
				<p><label for='cli_ville'>cli_ville</label>
                <input type='text' name='cli_ville' id='cli_ville' required value='<?= htmlentities($cli_ville,ENT_QUOTES,"utf-8") ?>'></p>
				<p><label for='cli_cp'>cli_code postal</label>
                <input type='text' name='cli_cp' id='cli_cp' required value='<?= htmlentities($cli_cp,ENT_QUOTES,"utf-8") ?>'></p>
				
				<input type='submit' name='ajouter' id='ajouter'>
				</div>
				</form>
				
</body>
</html>
