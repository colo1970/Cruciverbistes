

<script>
   $(function(){
	   $('#id_thead').hide();
	   
	   $("#select_mois").change(function(){
		 var val = $(this).val(); // on récupère la valeur	
		 if(val != '' && val !="Selectionner une date") {
          $('tbody').empty(); // on vide la liste 
		  $.ajax({  
            url: "index?controller=inscription&action=recupDate",  
            type:"POST",			
			data: "date_mois="+ val, // on envoie val 
            datatype: "json",  
            success: function(retjson){ 	
					   $.each($.parseJSON(retjson), function(index, value) {						   
						       $('tbody').append(							    
								 '<tr><td>'+value.nom+ '</td>'								 
								 +'<td>'+value.prenom + '</td>'
								 +'<td>'+value.moyenne +'</td></tr>'
								);      
                        });	
      }, 
		    
      error: function(e){  
           alert("error");  
      }  
    }); 
		  }else
    	   if(val !="" && val =="Selectionner une date"){
    	      $('tbody').empty();     
    	  
    		  $('tbody').disabled=false;
       }
      
	   });
   });   
</script><p> Rendez vous facile !</p>

  <h2>Les Associés</h2>
  <p>Selectionner le </p>
  <div class="row">
	   
  <div class="col-md-9">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
	
	   <form action="#" method="post">
		<div class="form-group">
		 	  <label for="sel1">Mois</label>
		 
             <select class="form-control" id="select_mois" name ="mois_epreuve">	
			 <option selected="selected">Selectionner une date</option>
               <?php 
		    foreach($mois_epreuves as $mois_epreuve){
				$mois_an = $mois_epreuve['mois']."/".$mois_epreuve['annee'];
			?>	
			
			    <option value ="<?php echo$mois_an; ?>"><?php echo $mois_an; ?></option>
					<?php
            }			
		    ?>
		     </select>
		  <br>
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

  <h3>Resultat mensuel</h3>
 
  <div class="row">	  
	<div class="col-md-9">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-1">	
			 <p>
  			  <?php 
			    //  echo"Rendez-vous le \t".$datefr." \t ". $lieu; 
			  ?>
			  </p>
			</div>
		 
		</div>
	</div>
  </div> 
  
  <table class="table table-striped">
    <thead id="id_thead">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Moyenne</th>
      </tr>
    </thead>
    <tbody>	  
     
              
       
    </tbody>
  </table>
