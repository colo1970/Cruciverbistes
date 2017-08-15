<p> Rendez vous facile !</p>

  <h2>Les Dentiste et Associés</h2>
  <p>Liste des rendez-vous</p>
  <div class="row">	  
	<div class="col-md-9">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">	
			Rendez-vous du :<?php echo $dateFr; ?>
			</div>
		 
		</div>
	</div>
  </div>   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Heure</th>
        <th>Client</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	  <?php 
	   foreach($creneaux as $creneau){
	  ?>
      <tr>
        <td>
         <?php 
		  $md =($creneau->get('minute_debut')==0)? $creneau->get('minute_debut')."0":$creneau->get('minute_debut');		   
		  $mf =($creneau->get('minute_fin')==0)? $creneau->get('minute_fin')."0":$creneau->get('minute_fin');		   
		  echo $creneau->get('heure_debut').":".$md." - ".$creneau->get('heure_fin').":".$mf;	
		  
		 ?>	
		</td>
	
        <td>
			 <?php
		    echo$creneau->get('nom');
		 ?>
		</td>
        <td>
		   <a href="#">Reserver</a>
		</td>
      </tr>
	  <?php
	   }
	   ?>
    </tbody>
  </table>
