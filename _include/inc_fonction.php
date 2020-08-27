<?php 
function affiche_menu($menu) {
	foreach($menu as $cle=>$tab) {
		echo "<a href='$tab[0]'><li>$tab[1]</li></a>";
	}
}

?>