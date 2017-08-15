

  <h3>Les inscrits de la prochaine rencontre</h3>
 
  <div class="row">	  
	<div class="col-md-9">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-1">	
			 <p>
  			  <?php 
			      echo"Rendez-vous le \t".$datefr." \t ". $lieu; 
			  ?>
			  </p>
			</div>
		 
		</div>
	</div>
  </div>   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Categorie</th>
      </tr>
    </thead>
    <tbody>
	  <?php 
	   foreach($inscris as $inscri){
	  ?>
      <tr>
        <td>
         <?php 
				   
		  echo $inscri->get('nom');	
		  
		 ?>	
		</td>
	
        <td>
			 <?php
		    echo$inscri->get('prenom');
		 ?>
		</td>
        <td>
		  <?php
		    echo$inscri->get('nom_cat');
		  ?>
		</td>
      </tr>
	  <?php
	   }
	   ?>
    </tbody>
  </table>
