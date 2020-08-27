
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter</title>
</head>
<body>
	<h1>Acheter</h1>
   
    <table>
        <thead>
			<tr>
        
				<th> Numéro de l’article</th>
                <th>Type de l’article</th>
                <th>Caractéristique</th>
				<th>Adresse</th>
				</tr>
		</thead>
		
    </table>
    
	<div>
	<h2>Ajouter un bien</h2>
	</div>
	
	<p>
	
	<input type='hidden' name='art_numero'></p>
	
	<p>
	<label for='art_type'>Type du bien</label>
	<input type='text' name='art_type'></p>
	
	<p>
	<label for='art_carac'>Caracterestiques du bien</label>
	<input type='text' name='art_carac'></p>
	
	<p>
	<label for='art_adresse'>Adresse du bien</label>
	<input type='text' name='art_adresse'></p>
	
	<input type='submit' name='ajouter' id='ajouter'>
	</form>
</body>
</html>
