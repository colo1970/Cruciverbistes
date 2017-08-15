<p>La client a bien été créé !</p>
<?php
    
	echo'Index voir<br/>';
 
	foreach($categories as $categorie){
		echo$categorie->getNomCat();
	} 
?>