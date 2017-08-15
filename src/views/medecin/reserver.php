<p> Rendez vous facile !</p>

  <h2>Les Dentiste et Associés</h2>
  <p>Selectionner le praticien puis entrer le jour de rendez-vous</p>
  <div class="row">
	   
  <div class="col-md-9">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
	
	   <form action="index.php?controller=creneaux&action=liste" method="post">
		<div class="form-group">
		  <label for="sel1">Dentiste</label>
		  <select class="form-control" id="sel1" name ="medecin">
		    <?php
	          foreach($medecins as $medecin){
			?>			
			 <option value ="<?php echo$medecin->get('id'); ?>"> 
			   <?php echo$medecin->get('titre')." ".$medecin->get('nom'); ?> 
			 </option>
		    <?php
		     }
		    ?>
		  </select>
		  <br>
		</div>
	 </div>
     <div class="col-sm-3 col-sm-push-1">
	  <div class="form-group row">
        <label for="date-input" class="col-2 col-form-label">Date</label>
        <div>
          <input class="form-control" type="date" value="2011-08-19" id="date-input" name = "date_rdv">
        </div>
       </div>   
	 
	  </div>

 </div>
   <div class="row">  
     <div class="col-sm-4 col">
	    <button type="submit" class="btn btn-primary">Primary</button>
	 </div>
   </div>
  </div>

    </form>
  </div>
  
